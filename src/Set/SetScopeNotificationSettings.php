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
    public const TYPE_NAME = 'setScopeNotificationSettings';

    public function __construct(
        /**
         * Types of chats for which to change the notification settings.
         */
        protected NotificationSettingsScope $scope,
        /**
         * The new notification settings for the given scope.
         */
        protected ScopeNotificationSettings $notificationSettings
    ) {}

    public static function fromArray(array $array): SetScopeNotificationSettings
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
