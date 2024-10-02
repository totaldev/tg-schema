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
    public const TYPE_NAME = 'profilePhoto';

    public function __construct(
        /**
         * Photo identifier; 0 for an empty photo. Can be used to find a photo in a list of user profile photos.
         */
        protected int            $id,
        /**
         * A small (160x160) user profile photo. The file can be downloaded only before the photo is changed.
         */
        protected File           $small,
        /**
         * A big (640x640) user profile photo. The file can be downloaded only before the photo is changed.
         */
        protected File           $big,
        /**
         * User profile photo minithumbnail; may be null.
         */
        protected ?Minithumbnail $minithumbnail,
        /**
         * True, if the photo has animated variant.
         */
        protected bool           $hasAnimation,
        /**
         * True, if the photo is visible only for the current user.
         */
        protected bool           $isPersonal,
    ) {}

    public static function fromArray(array $array): ProfilePhoto
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['small']),
            TdSchemaRegistry::fromArray($array['big']),
            isset($array['minithumbnail']) ? TdSchemaRegistry::fromArray($array['minithumbnail']) : null,
            $array['has_animation'],
            $array['is_personal'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'id'            => $this->id,
            'small'         => $this->small->typeSerialize(),
            'big'           => $this->big->typeSerialize(),
            'minithumbnail' => (isset($this->minithumbnail) ? $this->minithumbnail : null),
            'has_animation' => $this->hasAnimation,
            'is_personal'   => $this->isPersonal,
        ];
    }
}
