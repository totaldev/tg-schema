<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns saved notification sound by its identifier. Returns a 404 error if there is no saved notification sound with the specified identifier
 */
class GetSavedNotificationSound extends TdFunction
{
    public const TYPE_NAME = 'getSavedNotificationSound';

    /**
     * Identifier of the notification sound
     *
     * @var int
     */
    protected int $notificationSoundId;

    public function __construct(int $notificationSoundId)
    {
        $this->notificationSoundId = $notificationSoundId;
    }

    public static function fromArray(array $array): GetSavedNotificationSound
    {
        return new static(
            $array['notification_sound_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'notification_sound_id' => $this->notificationSoundId,
        ];
    }

    public function getNotificationSoundId(): int
    {
        return $this->notificationSoundId;
    }
}
