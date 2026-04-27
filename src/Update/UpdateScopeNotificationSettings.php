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
    public const string TYPE_NAME = 'updateScopeNotificationSettings';

    public function __construct(
        /**
         * The new notification settings.
         */
        protected ScopeNotificationSettings $notificationSettings,
        /**
         * Types of chats for which notification settings were updated.
         */
        protected NotificationSettingsScope $scope,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateScopeNotificationSettings
    {
        return new static(
            notificationSettings: TdSchemaRegistry::fromArray($array['notification_settings']),
            scope               : TdSchemaRegistry::fromArray($array['scope']),
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

    public function setNotificationSettings(ScopeNotificationSettings $value): static
    {
        $this->notificationSettings = $value;

        return $this;
    }

    public function setScope(NotificationSettingsScope $value): static
    {
        $this->scope = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_settings' => $this->notificationSettings->jsonSerialize(),
            'scope'                 => $this->scope->jsonSerialize(),
        ];
    }
}
