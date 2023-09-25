<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The supergroup location was changed
 */
class ChatEventLocationChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventLocationChanged';

    /**
     * New location; may be null
     *
     * @var ChatLocation|null
     */
    protected ?ChatLocation $newLocation;

    /**
     * Previous location; may be null
     *
     * @var ChatLocation|null
     */
    protected ?ChatLocation $oldLocation;

    public function __construct(?ChatLocation $oldLocation, ?ChatLocation $newLocation)
    {
        parent::__construct();

        $this->oldLocation = $oldLocation;
        $this->newLocation = $newLocation;
    }

    public static function fromArray(array $array): ChatEventLocationChanged
    {
        return new static(
            (isset($array['old_location']) ? TdSchemaRegistry::fromArray($array['old_location']) : null),
            (isset($array['new_location']) ? TdSchemaRegistry::fromArray($array['new_location']) : null),
        );
    }

    public function getNewLocation(): ?ChatLocation
    {
        return $this->newLocation;
    }

    public function getOldLocation(): ?ChatLocation
    {
        return $this->oldLocation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_location' => (isset($this->oldLocation) ? $this->oldLocation : null),
            'new_location' => (isset($this->newLocation) ? $this->newLocation : null),
        ];
    }
}
