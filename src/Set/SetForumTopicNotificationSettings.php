<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the notification settings of a forum topic
 */
class SetForumTopicNotificationSettings extends TdFunction
{
    public const TYPE_NAME = 'setForumTopicNotificationSettings';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier of the forum topic
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * New notification settings for the forum topic. If the topic is muted for more than 366 days, it is considered to be muted forever
     *
     * @var ChatNotificationSettings
     */
    protected ChatNotificationSettings $notificationSettings;

    public function __construct(int $chatId, int $messageThreadId, ChatNotificationSettings $notificationSettings)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->notificationSettings = $notificationSettings;
    }

    public static function fromArray(array $array): SetForumTopicNotificationSettings
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['notification_settings']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'notification_settings' => $this->notificationSettings->typeSerialize(),
        ];
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
}
