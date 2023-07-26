<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Represents a message sender, which can be used to send messages in a chat
 */
class ChatMessageSender extends TdObject
{
    public const TYPE_NAME = 'chatMessageSender';

    /**
     * Available message senders
     *
     * @var MessageSender
     */
    protected MessageSender $sender;

    /**
     * True, if Telegram Premium is needed to use the message sender
     *
     * @var bool
     */
    protected bool $needsPremium;

    public function __construct(MessageSender $sender, bool $needsPremium)
    {
        $this->sender = $sender;
        $this->needsPremium = $needsPremium;
    }

    public static function fromArray(array $array): ChatMessageSender
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sender']),
            $array['needs_premium'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sender' => $this->sender->typeSerialize(),
            'needs_premium' => $this->needsPremium,
        ];
    }

    public function getSender(): MessageSender
    {
        return $this->sender;
    }

    public function getNeedsPremium(): bool
    {
        return $this->needsPremium;
    }
}
