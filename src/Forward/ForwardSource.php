<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forward;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the last message from which a new message was forwarded last time.
 */
class ForwardSource extends TdObject
{
    public const TYPE_NAME = 'forwardSource';

    public function __construct(
        /**
         * Identifier of the chat to which the message that was forwarded belonged; may be 0 if unknown.
         */
        protected int            $chatId,
        /**
         * Identifier of the message; may be 0 if unknown.
         */
        protected int            $messageId,
        /**
         * Identifier of the sender of the message; may be null if unknown or the new message was forwarded not to Saved Messages.
         */
        protected ?MessageSender $senderId,
        /**
         * Name of the sender of the message if the sender is hidden by their privacy settings.
         */
        protected string         $senderName,
        /**
         * Point in time (Unix timestamp) when the message is sent; 0 if unknown.
         */
        protected int            $date,
        /**
         * True, if the message that was forwarded is outgoing; always false if sender is unknown.
         */
        protected bool           $isOutgoing,
    ) {}

    public static function fromArray(array $array): ForwardSource
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            $array['sender_name'],
            $array['date'],
            $array['is_outgoing'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_id'  => $this->messageId,
            'sender_id'   => (isset($this->senderId) ? $this->senderId : null),
            'sender_name' => $this->senderName,
            'date'        => $this->date,
            'is_outgoing' => $this->isOutgoing,
        ];
    }
}
