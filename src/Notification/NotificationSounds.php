<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Notification;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of notification sounds
 */
class NotificationSounds extends TdObject
{
    public const TYPE_NAME = 'notificationSounds';

    /**
     * A list of notification sounds
     *
     * @var NotificationSound[]
     */
    protected array $notificationSounds;

    public function __construct(array $notificationSounds)
    {
        $this->notificationSounds = $notificationSounds;
    }

    public static function fromArray(array $array): NotificationSounds
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['notification_sounds']),
        );
    }

    public function getNotificationSounds(): array
    {
        return $this->notificationSounds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->notificationSounds),
        ];
    }
}
