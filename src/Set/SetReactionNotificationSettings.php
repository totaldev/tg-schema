<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Reaction\ReactionNotificationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes notification settings for reactions.
 */
class SetReactionNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setReactionNotificationSettings';

    public function __construct(
        /**
         * The new notification settings for reactions.
         */
        protected ReactionNotificationSettings $notificationSettings
    ) {}

    public static function fromArray(array $array): SetReactionNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getNotificationSettings(): ReactionNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }
}
