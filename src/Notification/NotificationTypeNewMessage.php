<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * New message was received.
 */
class NotificationTypeNewMessage extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewMessage';

    public function __construct(
        /**
         * The message.
         */
        protected Message $message,
        /**
         * True, if message content must be displayed in notifications.
         */
        protected bool    $showPreview
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewMessage
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message']),
            $array['show_preview'],
        );
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'message'      => $this->message->typeSerialize(),
            'show_preview' => $this->showPreview,
        ];
    }
}
