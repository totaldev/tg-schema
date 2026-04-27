<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes an active notification from notification list. Needs to be called only if the notification is removed by the current user.
 */
class RemoveNotification extends TdFunction
{
    public const string TYPE_NAME = 'removeNotification';

    public function __construct(
        /**
         * Identifier of notification group to which the notification belongs.
         */
        protected int $notificationGroupId,
        /**
         * Identifier of removed notification.
         */
        protected int $notificationId,
    ) {}

    public static function fromArray(array $array): RemoveNotification
    {
        return new static(
            notificationGroupId: $array['notification_group_id'],
            notificationId     : $array['notification_id'],
        );
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function getNotificationId(): int
    {
        return $this->notificationId;
    }

    public function setNotificationGroupId(int $value): static
    {
        $this->notificationGroupId = $value;

        return $this;
    }

    public function setNotificationId(int $value): static
    {
        $this->notificationId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'notification_id'       => $this->notificationId,
        ];
    }
}
