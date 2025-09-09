<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of message senders, which can be used to send messages in a chat.
 */
class ChatMessageSenders extends TdObject
{
    public const TYPE_NAME = 'chatMessageSenders';

    public function __construct(
        /**
         * List of available message senders.
         *
         * @var ChatMessageSender[]
         */
        protected array $senders
    ) {}

    public static function fromArray(array $array): ChatMessageSenders
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['senders']),
        );
    }

    public function getSenders(): array
    {
        return $this->senders;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'senders' => array_map(static fn($x) => $x->typeSerialize(), $this->senders),
        ];
    }
}
