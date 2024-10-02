<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Notification\Notification;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A notification was changed.
 */
class UpdateNotification extends Update
{
    public const TYPE_NAME = 'updateNotification';

    public function __construct(
        /**
         * Unique notification group identifier.
         */
        protected int          $notificationGroupId,
        /**
         * Changed notification.
         */
        protected Notification $notification,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNotification
    {
        return new static(
            $array['notification_group_id'],
            TdSchemaRegistry::fromArray($array['notification']),
        );
    }

    public function getNotification(): Notification
    {
        return $this->notification;
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'notification'          => $this->notification->typeSerialize(),
        ];
    }
}
