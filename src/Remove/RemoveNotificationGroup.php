<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a group of active notifications. Needs to be called only if the notification group is removed by the current user
 */
class RemoveNotificationGroup extends TdFunction
{
    public const TYPE_NAME = 'removeNotificationGroup';

    /**
     * The maximum identifier of removed notifications
     *
     * @var int
     */
    protected int $maxNotificationId;

    /**
     * Notification group identifier
     *
     * @var int
     */
    protected int $notificationGroupId;

    public function __construct(int $notificationGroupId, int $maxNotificationId)
    {
        $this->notificationGroupId = $notificationGroupId;
        $this->maxNotificationId = $maxNotificationId;
    }

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
            '@type' => static::TYPE_NAME,
            'notification_group_id' => $this->notificationGroupId,
            'max_notification_id' => $this->maxNotificationId,
        ];
    }
}
