<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Notification\Notification;
use Totaldev\TgSchema\Notification\NotificationGroupType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A list of active notifications in a notification group has changed
 */
class UpdateNotificationGroup extends Update
{
    public const TYPE_NAME = 'updateNotificationGroup';

    /**
     * Unique notification group identifier
     *
     * @var int
     */
    protected int $notificationGroupId;

    /**
     * New type of the notification group
     *
     * @var NotificationGroupType
     */
    protected NotificationGroupType $type;

    /**
     * Identifier of a chat to which all notifications in the group belong
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Chat identifier, which notification settings must be applied to the added notifications
     *
     * @var int
     */
    protected int $notificationSettingsChatId;

    /**
     * Identifier of the notification sound to be played; 0 if sound is disabled
     *
     * @var int
     */
    protected int $notificationSoundId;

    /**
     * Total number of unread notifications in the group, can be bigger than number of active notifications
     *
     * @var int
     */
    protected int $totalCount;

    /**
     * List of added group notifications, sorted by notification ID
     *
     * @var Notification[]
     */
    protected array $addedNotifications;

    /**
     * Identifiers of removed group notifications, sorted by notification ID
     *
     * @var int[]
     */
    protected array $removedNotificationIds;

    public function __construct(
        int $notificationGroupId,
        NotificationGroupType $type,
        int $chatId,
        int $notificationSettingsChatId,
        int $notificationSoundId,
        int $totalCount,
        array $addedNotifications,
        array $removedNotificationIds,
    ) {
        parent::__construct();

        $this->notificationGroupId = $notificationGroupId;
        $this->type = $type;
        $this->chatId = $chatId;
        $this->notificationSettingsChatId = $notificationSettingsChatId;
        $this->notificationSoundId = $notificationSoundId;
        $this->totalCount = $totalCount;
        $this->addedNotifications = $addedNotifications;
        $this->removedNotificationIds = $removedNotificationIds;
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
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['addedNotifications']),
            $array['removed_notification_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'type' => $this->type->typeSerialize(),
            'chat_id' => $this->chatId,
            'notification_settings_chat_id' => $this->notificationSettingsChatId,
            'notification_sound_id' => $this->notificationSoundId,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->addedNotifications),
            'removed_notification_ids' => $this->removedNotificationIds,
        ];
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getType(): NotificationGroupType
    {
        return $this->type;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getNotificationSettingsChatId(): int
    {
        return $this->notificationSettingsChatId;
    }

    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getAddedNotifications(): array
    {
        return $this->addedNotifications;
    }

    public function getRemovedNotificationIds(): array
    {
        return $this->removedNotificationIds;
    }
}
