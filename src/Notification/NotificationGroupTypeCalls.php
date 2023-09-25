<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A group containing notifications of type notificationTypeNewCall
 */
class NotificationGroupTypeCalls extends NotificationGroupType
{
    public const TYPE_NAME = 'notificationGroupTypeCalls';

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
