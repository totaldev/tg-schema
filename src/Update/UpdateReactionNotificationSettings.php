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
    public const string TYPE_NAME = 'updateReactionNotificationSettings';

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
            notificationSettings: TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getNotificationSettings(): ReactionNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function setNotificationSettings(ReactionNotificationSettings $value): static
    {
        $this->notificationSettings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_settings' => $this->notificationSettings->jsonSerialize(),
        ];
    }
}
