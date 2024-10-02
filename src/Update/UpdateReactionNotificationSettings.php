<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Reaction\ReactionNotificationSettings;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Notification settings for reactions were updated.
 */
class UpdateReactionNotificationSettings extends Update
{
    public const TYPE_NAME = 'updateReactionNotificationSettings';

    public function __construct(
        /**
         * The new notification settings.
         */
        protected ReactionNotificationSettings $notificationSettings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateReactionNotificationSettings
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
