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
    public const TYPE_NAME = 'chatEventPhotoChanged';

    public function __construct(
        /**
         * Previous chat photo value; may be null.
         */
        protected ?ChatPhoto $oldPhoto,
        /**
         * New chat photo value; may be null.
         */
        protected ?ChatPhoto $newPhoto,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventPhotoChanged
    {
        return new static(
            isset($array['old_photo']) ? TdSchemaRegistry::fromArray($array['old_photo']) : null,
            isset($array['new_photo']) ? TdSchemaRegistry::fromArray($array['new_photo']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'old_photo' => (isset($this->oldPhoto) ? $this->oldPhoto : null),
            'new_photo' => (isset($this->newPhoto) ? $this->newPhoto : null),
        ];
    }
}
