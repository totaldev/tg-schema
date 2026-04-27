<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The chat photo was changed.
 */
class ChatEventPhotoChanged extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventPhotoChanged';

    public function __construct(
        /**
         * New chat photo value; may be null.
         */
        protected ?ChatPhoto $newPhoto,
        /**
         * Previous chat photo value; may be null.
         */
        protected ?ChatPhoto $oldPhoto,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventPhotoChanged
    {
        return new static(
            newPhoto: (isset($array['new_photo']) ? TdSchemaRegistry::fromArray($array['new_photo']) : null),
            oldPhoto: (isset($array['old_photo']) ? TdSchemaRegistry::fromArray($array['old_photo']) : null),
        );
    }

    public function getNewPhoto(): ?ChatPhoto
    {
        return $this->newPhoto;
    }

    public function getOldPhoto(): ?ChatPhoto
    {
        return $this->oldPhoto;
    }

    public function setNewPhoto(?ChatPhoto $value): static
    {
        $this->newPhoto = $value;

        return $this;
    }

    public function setOldPhoto(?ChatPhoto $value): static
    {
        $this->oldPhoto = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'new_photo' => (null !== $this->newPhoto ? $this->newPhoto->jsonSerialize() : null),
            'old_photo' => (null !== $this->oldPhoto ? $this->oldPhoto->jsonSerialize() : null),
        ];
    }
}
