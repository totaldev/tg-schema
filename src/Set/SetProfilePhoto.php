<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatPhoto;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a profile photo for the current user.
 */
class SetProfilePhoto extends TdFunction
{
    public const string TYPE_NAME = 'setProfilePhoto';

    public function __construct(
        /**
         * Pass true to set the public photo, which will be visible even if the main photo is hidden by privacy settings.
         */
        protected bool           $isPublic,
        /**
         * Profile photo to set.
         */
        protected InputChatPhoto $photo,
    ) {}

    public static function fromArray(array $array): SetProfilePhoto
    {
        return new static(
            isPublic: $array['is_public'],
            photo   : TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getIsPublic(): bool
    {
        return $this->isPublic;
    }

    public function getPhoto(): InputChatPhoto
    {
        return $this->photo;
    }

    public function setIsPublic(bool $value): static
    {
        $this->isPublic = $value;

        return $this;
    }

    public function setPhoto(InputChatPhoto $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_public' => $this->isPublic,
            'photo'     => $this->photo->jsonSerialize(),
        ];
    }
}
