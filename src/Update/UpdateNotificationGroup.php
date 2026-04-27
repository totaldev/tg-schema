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
    public const string TYPE_NAME = 'updateNotificationGroup';

    public function __construct(
        /**
         * List of added group notifications, sorted by notification identifier.
         *
         * @var Notification[]
         */
        protected array                 $addedNotifications,
        /**
         * Identifier of a chat to which all notifications in the group belong.
         */
        protected int                   $chatId,
        /**
         * Unique notification group identifier.
         */
        protected int                   $notificationGroupId,
        /**
         * Chat identifier, which notification settings must be applied to the added notifications.
         */
        protected int                   $notificationSettingsChatId,
        /**
         * Identifier of the notification sound to be played; 0 if sound is disabled.
         */
        protected int                   $notificationSoundId,
        /**
         * Identifiers of removed group notifications, sorted by notification identifier.
         *
         * @var int[]
         */
        protected array                 $removedNotificationIds,
        /**
         * Total number of unread notifications in the group, can be bigger than number of active notifications.
         */
        protected int                   $totalCount,
        /**
         * New type of the notification group.
         */
        protected NotificationGroupType $type,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNotificationGroup
    {
        return new static(
            addedNotifications        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['added_notifications']),
            chatId                    : $array['chat_id'],
            notificationGroupId       : $array['notification_group_id'],
            notificationSettingsChatId: $array['notification_settings_chat_id'],
            notificationSoundId       : $array['notification_sound_id'],
            removedNotificationIds    : $array['removed_notification_ids'],
            totalCount                : $array['total_count'],
            type                      : TdSchemaRegistry::fromArray($array['type']),
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

    public function setAddedNotifications(array $value): static
    {
        $this->addedNotifications = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setNotificationGroupId(int $value): static
    {
        $this->notificationGroupId = $value;

        return $this;
    }

    public function setNotificationSettingsChatId(int $value): static
    {
        $this->notificationSettingsChatId = $value;

        return $this;
    }

    public function setNotificationSoundId(int $value): static
    {
        $this->notificationSoundId = $value;

        return $this;
    }

    public function setRemovedNotificationIds(array $value): static
    {
        $this->removedNotificationIds = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setType(NotificationGroupType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'added_notifications'           => array_map(static fn($x) => $x->jsonSerialize(), $this->addedNotifications),
            'chat_id'                       => $this->chatId,
            'notification_group_id'         => $this->notificationGroupId,
            'notification_settings_chat_id' => $this->notificationSettingsChatId,
            'notification_sound_id'         => $this->notificationSoundId,
            'removed_notification_ids'      => $this->removedNotificationIds,
            'total_count'                   => $this->totalCount,
            'type'                          => $this->type->jsonSerialize(),
        ];
    }
}
