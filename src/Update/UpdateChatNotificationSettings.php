<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Notification settings for a chat were changed.
 */
class UpdateChatNotificationSettings extends Update
{
    public const TYPE_NAME = 'updateChatNotificationSettings';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * The new notification settings.
         */
        protected ChatNotificationSettings $notificationSettings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatNotificationSettings
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }
}
