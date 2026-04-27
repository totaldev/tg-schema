<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a group of active notifications. Needs to be called only if the notification group is removed by the current user.
 */
class RemoveNotificationGroup extends TdFunction
{
    public const string TYPE_NAME = 'removeNotificationGroup';

    public function __construct(
        /**
         * The maximum identifier of removed notifications.
         */
        protected int $maxNotificationId,
        /**
         * Notification group identifier.
         */
        protected int $notificationGroupId,
    ) {}

    public static function fromArray(array $array): RemoveNotificationGroup
    {
        return new static(
            maxNotificationId  : $array['max_notification_id'],
            notificationGroupId: $array['notification_group_id'],
        );
    }

    public function getMaxNotificationId(): int
    {
        return $this->maxNotificationId;
    }

    public function getNotificationGroupId(): int
    {
        return $this->notificationGroupId;
    }

    public function setMaxNotificationId(int $value): static
    {
        $this->maxNotificationId = $value;

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
            'max_notification_id'   => $this->maxNotificationId,
            'notification_group_id' => $this->notificationGroupId,
        ];
    }
}
