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
    public const TYPE_NAME = 'notificationTypeNewPushMessage';

    public function __construct(
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
        /**
         * True, if the message is outgoing.
         */
        protected bool               $isOutgoing,
        /**
         * Push message content.
         */
        protected PushMessageContent $content,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewPushMessage
    {
        return new static(
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            $array['sender_name'],
            $array['is_outgoing'],
            TdSchemaRegistry::fromArray($array['content']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'message_id'  => $this->messageId,
            'sender_id'   => $this->senderId->typeSerialize(),
            'sender_name' => $this->senderName,
            'is_outgoing' => $this->isOutgoing,
            'content'     => $this->content->typeSerialize(),
        ];
    }
}
