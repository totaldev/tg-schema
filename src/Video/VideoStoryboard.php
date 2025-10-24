<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a storyboard for a video.
 */
class VideoStoryboard extends TdObject
{
    public const string TYPE_NAME = 'videoStoryboard';

    public function __construct(
        /**
         * A JPEG file that contains tiled previews of video.
         */
        protected File $storyboardFile,
        /**
         * Width of a tile.
         */
        protected int  $width,
        /**
         * Height of a tile.
         */
        protected int  $height,
        /**
         * File that describes mapping of position in the video to a tile in the JPEG file.
         */
        protected File $mapFile,
    ) {}

    public static function fromArray(array $array): VideoStoryboard
    {
        return new static(
            TdSchemaRegistry::fromArray($array['storyboard_file']),
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['map_file']),
        );
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getMapFile(): File
    {
        return $this->mapFile;
    }

    public function getStoryboardFile(): File
    {
        return $this->storyboardFile;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setMapFile(File $value): static
    {
        $this->mapFile = $value;

        return $this;
    }

    public function setStoryboardFile(File $value): static
    {
        $this->storyboardFile = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'storyboard_file' => $this->storyboardFile->typeSerialize(),
            'width'           => $this->width,
            'height'          => $this->height,
            'map_file'        => $this->mapFile->typeSerialize(),
        ];
    }
}
