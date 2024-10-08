<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

/**
 * New secret chat was created.
 */
class NotificationTypeNewSecretChat extends NotificationType
{
    public const TYPE_NAME = 'notificationTypeNewSecretChat';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationTypeNewSecretChat
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
