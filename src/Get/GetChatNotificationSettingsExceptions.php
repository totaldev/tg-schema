<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Notification\NotificationSettingsScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns list of chats with non-default notification settings for new messages
 */
class GetChatNotificationSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'getChatNotificationSettingsExceptions';

    /**
     * If specified, only chats from the scope will be returned; pass null to return chats from all scopes
     *
     * @var NotificationSettingsScope
     */
    protected NotificationSettingsScope $scope;

    /**
     * Pass true to include in the response chats with only non-default sound
     *
     * @var bool
     */
    protected bool $compareSound;

    public function __construct(NotificationSettingsScope $scope, bool $compareSound)
    {
        $this->scope = $scope;
        $this->compareSound = $compareSound;
    }

    public static function fromArray(array $array): GetChatNotificationSettingsExceptions
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['compare_sound'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'scope' => $this->scope->typeSerialize(),
            'compare_sound' => $this->compareSound,
        ];
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function getCompareSound(): bool
    {
        return $this->compareSound;
    }
}
