<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Notification\NotificationSettingsScope;
use Totaldev\TgSchema\Scope\ScopeNotificationSettings;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Notification settings for some type of chats were updated.
 */
class UpdateScopeNotificationSettings extends Update
{
    public const TYPE_NAME = 'updateScopeNotificationSettings';

    public function __construct(
        /**
         * Types of chats for which notification settings were updated.
         */
        protected NotificationSettingsScope $scope,
        /**
         * The new notification settings.
         */
        protected ScopeNotificationSettings $notificationSettings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateScopeNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getNotificationSettings(): ScopeNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'scope'                 => $this->scope->typeSerialize(),
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }
}
