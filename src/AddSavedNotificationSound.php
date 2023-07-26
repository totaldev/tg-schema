<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Adds a new notification sound to the list of saved notification sounds. The new notification sound is added to the top of the list. If it is already in the list, its position isn't changed
 */
class AddSavedNotificationSound extends TdFunction
{
    public const TYPE_NAME = 'addSavedNotificationSound';

    /**
     * Notification sound file to add
     *
     * @var InputFile
     */
    protected InputFile $sound;

    public function __construct(InputFile $sound)
    {
        $this->sound = $sound;
    }

    public static function fromArray(array $array): AddSavedNotificationSound
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sound']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sound' => $this->sound->typeSerialize(),
        ];
    }

    public function getSound(): InputFile
    {
        return $this->sound;
    }
}
