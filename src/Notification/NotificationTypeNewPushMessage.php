<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Push\PushMessageContent;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * New message was received through a push notification.
 */
class NotificationTypeNewPushMessage extends NotificationType
{
    public const string TYPE_NAME = 'notificationTypeNewPushMessage';

    public function __construct(
        /**
         * Push message content.
         */
        protected PushMessageContent $content,
        /**
         * True, if the message is outgoing.
         */
        protected bool               $isOutgoing,
        /**
         * The message identifier. The message will not be available in the chat history, but the identifier can be used in viewMessages, or as a message to be replied in the same chat.
         */
        protected int                $messageId,
        /**
         * Identifier of the sender of the message. Corresponding user or chat may be inaccessible.
         */
        protected MessageSender      $senderId,
        /**
         * Name of the sender.
         */
        protected string             $senderName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            content   : TdSchemaRegistry::fromArray($array['content']),
            isOutgoing: $array['is_outgoing'],
            messageId : $array['message_id'],
            senderId  : TdSchemaRegistry::fromArray($array['sender_id']),
            senderName: $array['sender_name'],
        );
    }

    public function getContent(): PushMessageContent
    {
        return $this->content;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getSenderName(): string
    {
        return $this->senderName;
    }

    public function setContent(PushMessageContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setIsOutgoing(bool $value): static
    {
        $this->isOutgoing = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setSenderName(string $value): static
    {
        $this->senderName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'content'     => $this->content->jsonSerialize(),
            'is_outgoing' => $this->isOutgoing,
            'message_id'  => $this->messageId,
            'sender_id'   => $this->senderId->jsonSerialize(),
            'sender_name' => $this->senderName,
        ];
    }
}
