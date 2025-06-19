<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the notification settings of a chat. Notification settings of a chat with the current user (Saved Messages) can't be changed.
 */
class SetChatNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setChatNotificationSettings';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * New notification settings for the chat. If the chat is muted for more than 366 days, it is considered to be muted forever.
         */
        protected ChatNotificationSettings $notificationSettings
    ) {}

    public static function fromArray(array $array): SetChatNotificationSettings
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
