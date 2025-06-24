<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of messages with active live location that need to be updated by the application has changed. The list is persistent across application restarts
 * only if the message database is used.
 */
class UpdateActiveLiveLocationMessages extends Update
{
    public const TYPE_NAME = 'updateActiveLiveLocationMessages';

    public function __construct(
        /**
         * The list of messages with active live locations.
         *
         * @var Message[]
         */
        protected array $messages
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateActiveLiveLocationMessages
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
        );
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->messages),
        ];
    }
}
