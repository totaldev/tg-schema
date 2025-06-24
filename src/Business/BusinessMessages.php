<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of messages from a business account as received by a bot.
 */
class BusinessMessages extends TdObject
{
    public const TYPE_NAME = 'businessMessages';

    public function __construct(
        /**
         * List of business messages.
         *
         * @var BusinessMessage[]
         */
        protected array $messages
    ) {}

    public static function fromArray(array $array): BusinessMessages
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
