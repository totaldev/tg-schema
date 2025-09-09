<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The list of saved notification sounds was updated. This update may not be sent until information about a notification sound was requested for the first time.
 */
class UpdateSavedNotificationSounds extends Update
{
    public const TYPE_NAME = 'updateSavedNotificationSounds';

    public function __construct(
        /**
         * The new list of identifiers of saved notification sounds.
         *
         * @var int[]
         */
        protected array $notificationSoundIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSavedNotificationSounds
    {
        return new static(
            $array['notification_sound_ids'],
        );
    }

    public function getNotificationSoundIds(): array
    {
        return $this->notificationSoundIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'notification_sound_ids' => $this->notificationSoundIds,
        ];
    }
}
