<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a message sender, which can be used to send messages in a chat.
 */
class ChatMessageSender extends TdObject
{
    public const TYPE_NAME = 'chatMessageSender';

    public function __construct(
        /**
         * The message sender.
         */
        protected MessageSender $sender,
        /**
         * True, if Telegram Premium is needed to use the message sender.
         */
        protected bool          $needsPremium,
    ) {}

    public static function fromArray(array $array): ChatMessageSender
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender']),
            $array['needs_premium'],
        );
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }

    public function getSender(): MessageSender
    {
        return $this->sender;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'sender'        => $this->sender->typeSerialize(),
            'needs_premium' => $this->needsPremium,
        ];
    }
}
