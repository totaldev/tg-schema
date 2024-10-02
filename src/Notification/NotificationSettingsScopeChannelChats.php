<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Notification settings applied to all channel chats when the corresponding chat setting has a default value
 */
class NotificationSettingsScopeChannelChats extends NotificationSettingsScope
{
    public const TYPE_NAME = 'notificationSettingsScopeChannelChats';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): NotificationSettingsScopeChannelChats
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
