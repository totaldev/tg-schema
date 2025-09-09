<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains basic information about the photo of a chat.
 */
class ChatPhotoInfo extends TdObject
{
    public const TYPE_NAME = 'chatPhotoInfo';

    public function __construct(
        /**
         * A small (160x160) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed.
         */
        protected File           $small,
        /**
         * A big (640x640) chat photo variant in JPEG format. The file can be downloaded only before the photo is changed.
         */
        protected File           $big,
        /**
         * Chat photo minithumbnail; may be null.
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

    public static function fromArray(array $array): ChatPhotoInfo
    {
        return new static(
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
            'small'         => $this->small->typeSerialize(),
            'big'           => $this->big->typeSerialize(),
            'minithumbnail' => $this->minithumbnail ?? null,
            'has_animation' => $this->hasAnimation,
            'is_personal'   => $this->isPersonal,
        ];
    }
}
