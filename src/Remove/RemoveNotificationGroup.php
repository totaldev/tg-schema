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
    public const TYPE_NAME = 'removeNotificationGroup';

    public function __construct(
        /**
         * Notification group identifier.
         */
        protected int $notificationGroupId,
        /**
         * The maximum identifier of removed notifications.
         */
        protected int $maxNotificationId
    ) {}

    public static function fromArray(array $array): RemoveNotificationGroup
    {
        return new static(
            $array['notification_group_id'],
            $array['max_notification_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'max_notification_id'   => $this->maxNotificationId,
        ];
    }
}
