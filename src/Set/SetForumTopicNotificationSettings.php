<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the notification settings of a forum topic.
 */
class SetForumTopicNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setForumTopicNotificationSettings';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int                      $messageThreadId,
        /**
         * New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever.
         */
        protected ChatNotificationSettings $notificationSettings
    ) {}

    public static function fromArray(array $array): SetForumTopicNotificationSettings
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
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
            'message_thread_id'     => $this->messageThreadId,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
    }
}
