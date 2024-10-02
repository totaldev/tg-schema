<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;

/**
 * Describes the types of chats to which notification settings are relevant.
 */
class NotificationSettingsScope extends TdObject
{
    public const TYPE_NAME = 'NotificationSettingsScope';

    public function __construct() {}

    public static function fromArray(array $array): NotificationSettingsScope
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
