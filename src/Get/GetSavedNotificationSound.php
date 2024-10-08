<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns saved notification sound by its identifier. Returns a 404 error if there is no saved notification sound with the specified identifier.
 */
class GetSavedNotificationSound extends TdFunction
{
    public const TYPE_NAME = 'getSavedNotificationSound';

    public function __construct(
        /**
         * Identifier of the notification sound.
         */
        protected int $notificationSoundId
    ) {}

    public static function fromArray(array $array): GetSavedNotificationSound
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
