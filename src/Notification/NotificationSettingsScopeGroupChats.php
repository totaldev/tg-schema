<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

/**
 * Notification settings applied to all basic group and supergroup chats when the corresponding chat setting has a default value.
 */
class NotificationSettingsScopeGroupChats extends NotificationSettingsScope
{
    public const TYPE_NAME = 'notificationSettingsScopeGroupChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationSettingsScopeGroupChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
