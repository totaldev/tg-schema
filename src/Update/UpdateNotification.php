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
    public const string TYPE_NAME = 'updateNotification';

    public function __construct(
        /**
         * Changed notification.
         */
        protected Notification $notification,
        /**
         * Unique notification group identifier.
         */
        protected int          $notificationGroupId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNotification
    {
        return new static(
            notification       : TdSchemaRegistry::fromArray($array['notification']),
            notificationGroupId: $array['notification_group_id'],
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

    public function setNotification(Notification $value): static
    {
        $this->notification = $value;

        return $this;
    }

    public function setNotificationGroupId(int $value): static
    {
        $this->notificationGroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification'          => $this->notification->jsonSerialize(),
            'notification_group_id' => $this->notificationGroupId,
        ];
    }
}
