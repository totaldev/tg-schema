<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Notification\NotificationSettingsScope;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the list of chats with non-default notification settings for new messages.
 */
class GetChatNotificationSettingsExceptions extends TdFunction
{
    public const TYPE_NAME = 'getChatNotificationSettingsExceptions';

    public function __construct(
        /**
         * If specified, only chats from the scope will be returned; pass null to return chats from all scopes.
         */
        protected NotificationSettingsScope $scope,
        /**
         * Pass true to include in the response chats with only non-default sound.
         */
        protected bool                      $compareSound,
    ) {}

    public static function fromArray(array $array): GetChatNotificationSettingsExceptions
    {
        return new static(
            TdSchemaRegistry::fromArray($array['scope']),
            $array['compare_sound'],
        );
    }

    public function getCompareSound(): bool
    {
        return $this->compareSound;
    }

    public function getScope(): NotificationSettingsScope
    {
        return $this->scope;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'scope'         => $this->scope->typeSerialize(),
            'compare_sound' => $this->compareSound,
        ];
    }
}
