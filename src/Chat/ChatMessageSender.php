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
    public const string TYPE_NAME = 'chatMessageSender';

    public function __construct(
        /**
         * True, if Telegram Premium is needed to use the message sender.
         */
        protected bool          $needsPremium,
        /**
         * The message sender.
         */
        protected MessageSender $sender,
    ) {}

    public static function fromArray(array $array): ChatMessageSender
    {
        return new static(
            needsPremium: $array['needs_premium'],
            sender      : TdSchemaRegistry::fromArray($array['sender']),
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

    public function setNeedsPremium(bool $value): static
    {
        $this->needsPremium = $value;

        return $this;
    }

    public function setSender(MessageSender $value): static
    {
        $this->sender = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'needs_premium' => $this->needsPremium,
            'sender'        => $this->sender->jsonSerialize(),
        ];
    }
}
