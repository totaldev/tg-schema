<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes a notification sound from the list of saved notification sounds.
 */
class RemoveSavedNotificationSound extends TdFunction
{
    public const TYPE_NAME = 'removeSavedNotificationSound';

    public function __construct(
        /**
         * Identifier of the notification sound.
         */
        protected int $notificationSoundId
    ) {}

    public static function fromArray(array $array): RemoveSavedNotificationSound
    {
        return new static(
            $array['notification_sound_id'],
        );
    }

    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'notification_sound_id' => $this->notificationSoundId,
        ];
    }
}
