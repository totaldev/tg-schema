<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Chat\ChatNotificationSettings;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the notification settings of a forum topic in a forum supergroup chat or a chat with a bot with topics.
 */
class SetForumTopicNotificationSettings extends TdFunction
{
    public const string TYPE_NAME = 'setForumTopicNotificationSettings';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                      $chatId,
        /**
         * Forum topic identifier.
         */
        protected int                      $forumTopicId,
        /**
         * New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever.
         */
        protected ChatNotificationSettings $notificationSettings,
    ) {}

    public static function fromArray(array $array): SetForumTopicNotificationSettings
    {
        return new static(
            chatId              : $array['chat_id'],
            forumTopicId        : $array['forum_topic_id'],
            notificationSettings: TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function getNotificationSettings(): ChatNotificationSettings
    {
        return $this->notificationSettings;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

        return $this;
    }

    public function setNotificationSettings(ChatNotificationSettings $value): static
    {
        $this->notificationSettings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'forum_topic_id'        => $this->forumTopicId,
            'notification_settings' => $this->notificationSettings->jsonSerialize(),
        ];
    }
}
