<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

/**
 * A group containing notifications of type notificationTypeNewCall.
 */
class NotificationGroupTypeCalls extends NotificationGroupType
{
    public const string TYPE_NAME = 'notificationGroupTypeCalls';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationGroupTypeCalls
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
