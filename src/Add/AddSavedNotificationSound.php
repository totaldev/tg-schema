<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a new notification sound to the list of saved notification sounds. The new notification sound is added to the top of the list. If it is already in the
 * list, its position isn't changed.
 */
class AddSavedNotificationSound extends TdFunction
{
    public const TYPE_NAME = 'addSavedNotificationSound';

    public function __construct(
        /**
         * Notification sound file to add.
         */
        protected InputFile $sound
    ) {}

    public static function fromArray(array $array): AddSavedNotificationSound
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sound']),
        );
    }

    public function getSound(): InputFile
    {
        return $this->sound;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sound' => $this->sound->typeSerialize(),
        ];
    }
}
