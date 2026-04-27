<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Notification\NotificationSettingsScope;
use Totaldev\TgSchema\Scope\ScopeNotificationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes notification settings for chats of a given type.
 */
class SetScopeNotificationSettings extends TdFunction
{
    public const string TYPE_NAME = 'setScopeNotificationSettings';

    public function __construct(
        /**
         * The new notification settings for the given scope.
         */
        protected ScopeNotificationSettings $notificationSettings,
        /**
         * Types of chats for which to change the notification settings.
         */
        protected NotificationSettingsScope $scope,
    ) {}

    public static function fromArray(array $array): SetScopeNotificationSettings
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
