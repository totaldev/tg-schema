<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The supergroup location was changed.
 */
class ChatEventLocationChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventLocationChanged';

    public function __construct(
        /**
         * New location; may be null.
         */
        protected ?ChatLocation $newLocation,
        /**
         * Previous location; may be null.
         */
        protected ?ChatLocation $oldLocation,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventLocationChanged
    {
        return new static(
            newLocation: (isset($array['new_location']) ? TdSchemaRegistry::fromArray($array['new_location']) : null),
            oldLocation: (isset($array['old_location']) ? TdSchemaRegistry::fromArray($array['old_location']) : null),
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

    public function setNewLocation(?ChatLocation $value): static
    {
        $this->newLocation = $value;

        return $this;
    }

    public function setOldLocation(?ChatLocation $value): static
    {
        $this->oldLocation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'new_location' => (null !== $this->newLocation ? $this->newLocation->jsonSerialize() : null),
            'old_location' => (null !== $this->oldLocation ? $this->oldLocation->jsonSerialize() : null),
        ];
    }
}
