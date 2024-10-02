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
    public const TYPE_NAME = 'notificationGroup';

    public function __construct(
        /**
         * Unique persistent auto-incremented from 1 identifier of the notification group.
         */
        protected int                   $id,
        /**
         * Type of the group.
         */
        protected NotificationGroupType $type,
        /**
         * Identifier of a chat to which all notifications in the group belong.
         */
        protected int                   $chatId,
        /**
         * Total number of active notifications in the group.
         */
        protected int                   $totalCount,
        /**
         * The list of active notifications.
         *
         * @var Notification[]
         */
        protected array                 $notifications,
    ) {}

    public static function fromArray(array $array): NotificationGroup
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['chat_id'],
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['notifications']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'type'        => $this->type->typeSerialize(),
            'chat_id'     => $this->chatId,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->notifications),
        ];
    }
}
