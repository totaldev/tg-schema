<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

/**
 * A wallpaper in JPEG format.
 */
class BackgroundTypeWallpaper extends BackgroundType
{
    public const TYPE_NAME = 'backgroundTypeWallpaper';

    public function __construct(
        /**
         * True, if the wallpaper must be downscaled to fit in 450x450 square and then box-blurred with radius 12.
         */
        protected bool $isBlurred,
        /**
         * True, if the background needs to be slightly moved when device is tilted.
         */
        protected bool $isMoving,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundTypeWallpaper
    {
        return new static(
            $array['is_blurred'],
            $array['is_moving'],
        );
    }

    public function getIsBlurred(): bool
    {
        return $this->isBlurred;
    }

    public function getIsMoving(): bool
    {
        return $this->isMoving;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_blurred' => $this->isBlurred,
            'is_moving'  => $this->isMoving,
        ];
    }
}
