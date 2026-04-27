<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Profile;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a user profile photo.
 */
class ProfilePhoto extends TdObject
{
    public const string TYPE_NAME = 'profilePhoto';

    public function __construct(
        /**
         * A big (640x640) user profile photo. The file can be downloaded only before the photo is changed.
         */
        protected File           $big,
        /**
         * True, if the photo has animated variant.
         */
        protected bool           $hasAnimation,
        /**
         * Photo identifier; 0 for an empty photo. Can be used to find a photo in a list of user profile photos.
         */
        protected int            $id,
        /**
         * True, if the photo is visible only for the current user.
         */
        protected bool           $isPersonal,
        /**
         * User profile photo minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * A small (160x160) user profile photo. The file can be downloaded only before the photo is changed.
         */
        protected File           $small,
    ) {}

    public static function fromArray(array $array): ProfilePhoto
    {
        return new static(
            big          : TdSchemaRegistry::fromArray($array['big']),
            hasAnimation : $array['has_animation'],
            id           : $array['id'],
            isPersonal   : $array['is_personal'],
            minithumbnail: (isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null),
            small        : TdSchemaRegistry::fromArray($array['small']),
        );
    }

    public function getBig(): File
    {
        return $this->big;
    }

    public function getHasAnimation(): bool
    {
        return $this->hasAnimation;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getMinithumbnail(): ?Minithumbnail
    {
        return $this->minithumbnail;
    }

    public function getSmall(): File
    {
        return $this->small;
    }

    public function setBig(File $value): static
    {
        $this->big = $value;

        return $this;
    }

    public function setHasAnimation(bool $value): static
    {
        $this->hasAnimation = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsPersonal(bool $value): static
    {
        $this->isPersonal = $value;

        return $this;
    }

    public function setMinithumbnail(?Minithumbnail $value): static
    {
        $this->minithumbnail = $value;

        return $this;
    }

    public function setSmall(File $value): static
    {
        $this->small = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'big'           => $this->big->jsonSerialize(),
            'has_animation' => $this->hasAnimation,
            'id'            => $this->id,
            'is_personal'   => $this->isPersonal,
            'minithumbnail' => (null !== $this->minithumbnail ? $this->minithumbnail->jsonSerialize() : null),
            'small'         => $this->small->jsonSerialize(),
        ];
    }
}
