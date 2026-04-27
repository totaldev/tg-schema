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
         * Height of a tile.
         */
        protected int  $height,
        /**
         * File that describes mapping of position in the video to a tile in the JPEG file.
         */
        protected File $mapFile,
        /**
         * A JPEG file that contains tiled previews of video.
         */
        protected File $storyboardFile,
        /**
         * Width of a tile.
         */
        protected int  $width,
    ) {}

    public static function fromArray(array $array): VideoStoryboard
    {
        return new static(
            height        : $array['height'],
            mapFile       : TdSchemaRegistry::fromArray($array['map_file']),
            storyboardFile: TdSchemaRegistry::fromArray($array['storyboard_file']),
            width         : $array['width'],
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
            'height'          => $this->height,
            'map_file'        => $this->mapFile->jsonSerialize(),
            'storyboard_file' => $this->storyboardFile->jsonSerialize(),
            'width'           => $this->width,
        ];
    }
}
