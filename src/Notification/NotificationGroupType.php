<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the type of notifications in a notification group.
 */
class NotificationGroupType extends TdObject
{
    public const TYPE_NAME = 'NotificationGroupType';

    public function __construct() {}

    public static function fromArray(array $array): NotificationGroupType
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
