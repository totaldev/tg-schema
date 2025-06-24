<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Notification\Notification;
use Totaldev\TgSchema\Notification\NotificationGroupType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A list of active notifications in a notification group has changed.
 */
class UpdateNotificationGroup extends Update
{
    public const TYPE_NAME = 'updateNotificationGroup';

    public function __construct(
        /**
         * Unique notification group identifier.
         */
        protected int                   $notificationGroupId,
        /**
         * New type of the notification group.
         */
        protected NotificationGroupType $type,
        /**
         * Identifier of a chat to which all notifications in the group belong.
         */
        protected int                   $chatId,
        /**
         * Chat identifier, which notification settings must be applied to the added notifications.
         */
        protected int                   $notificationSettingsChatId,
        /**
         * Identifier of the notification sound to be played; 0 if sound is disabled.
         */
        protected int                   $notificationSoundId,
        /**
         * Total number of unread notifications in the group, can be bigger than number of active notifications.
         */
        protected int                   $totalCount,
        /**
         * List of added group notifications, sorted by notification identifier.
         *
         * @var Notification[]
         */
        protected array                 $addedNotifications,
        /**
         * Identifiers of removed group notifications, sorted by notification identifier.
         *
         * @var int[]
         */
        protected array                 $removedNotificationIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNotificationGroup
    {
        return new static(
            $array['notification_group_id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['chat_id'],
            $array['notification_settings_chat_id'],
            $array['notification_sound_id'],
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['added_notifications']),
            $array['removed_notification_ids'],
        );
    }

    public function getAddedNotifications(): array
    {
        return $this->addedNotifications;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getNotificationSettingsChatId(): int
    {
        return $this->notificationSettingsChatId;
    }

    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }

    public function getRemovedNotificationIds(): array
    {
        return $this->removedNotificationIds;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getType(): NotificationGroupType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'notification_group_id'         => $this->notificationGroupId,
            'type'                          => $this->type->typeSerialize(),
            'chat_id'                       => $this->chatId,
            'notification_settings_chat_id' => $this->notificationSettingsChatId,
            'notification_sound_id'         => $this->notificationSoundId,
            'total_count'                   => $this->totalCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->addedNotifications),
            'removed_notification_ids'      => $this->removedNotificationIds,
        ];
    }
}
