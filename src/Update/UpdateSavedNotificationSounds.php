<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of saved notifications sounds was updated. This update may not be sent until information about a notification sound was requested for the first time
 */
class UpdateSavedNotificationSounds extends Update
{
    public const TYPE_NAME = 'updateSavedNotificationSounds';

    /**
     * The new list of identifiers of saved notification sounds
     *
     * @var int[]
     */
    protected array $notificationSoundIds;

    public function __construct(array $notificationSoundIds)
    {
        parent::__construct();

        $this->notificationSoundIds = $notificationSoundIds;
    }

    public static function fromArray(array $array): UpdateSavedNotificationSounds
    {
        return new static(
            $array['notification_sound_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'notification_sound_ids' => $this->notificationSoundIds,
        ];
    }

    public function getNotificationSoundIds(): array
    {
        return $this->notificationSoundIds;
    }
}
