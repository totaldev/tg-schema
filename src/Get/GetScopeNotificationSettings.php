<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Notification\NotificationSettingsScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the notification settings for chats of a given type
 */
class GetScopeNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'getScopeNotificationSettings';

    /**
     * Types of chats for which to return the notification settings information
     *
     * @var NotificationSettingsScope
     */
    protected NotificationSettingsScope $scope;

    public function __construct(NotificationSettingsScope $scope)
    {
        $this->scope = $scope;
    }

    public static function fromArray(array $array): GetScopeNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
        );
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
        ];
    }
}
