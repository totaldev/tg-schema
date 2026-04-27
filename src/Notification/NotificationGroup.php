<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a group of notifications.
 */
class NotificationGroup extends TdObject
{
    public const string TYPE_NAME = 'notificationGroup';

    public function __construct(
        /**
         * Identifier of a chat to which all notifications in the group belong.
         */
        protected int                   $chatId,
        /**
         * Unique persistent auto-incremented from 1 identifier of the notification group.
         */
        protected int                   $id,
        /**
         * The list of active notifications.
         *
         * @var Notification[]
         */
        protected array                 $notifications,
        /**
         * Total number of active notifications in the group.
         */
        protected int                   $totalCount,
        /**
         * Type of the group.
         */
        protected NotificationGroupType $type,
    ) {}

    public static function fromArray(array $array): NotificationGroup
    {
        return new static(
            chatId       : $array['chat_id'],
            id           : $array['id'],
            notifications: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['notifications']),
            totalCount   : $array['total_count'],
            type         : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNotifications(): array
    {
        return $this->notifications;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getType(): NotificationGroupType
    {
        return $this->type;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setNotifications(array $value): static
    {
        $this->notifications = $value;

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
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'id'            => $this->id,
            'notifications' => array_map(static fn($x) => $x->jsonSerialize(), $this->notifications),
            'total_count'   => $this->totalCount,
            'type'          => $this->type->jsonSerialize(),
        ];
    }
}
