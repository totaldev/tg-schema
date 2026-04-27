<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a file with a map thumbnail in PNG format. Only map thumbnail files with size less than 1MB can be downloaded.
 */
class GetMapThumbnailFile extends TdFunction
{
    public const string TYPE_NAME = 'getMapThumbnailFile';

    public function __construct(
        /**
         * Identifier of a chat in which the thumbnail will be shown. Use 0 if unknown.
         */
        protected int      $chatId,
        /**
         * Map height in pixels before applying scale; 16-1024.
         */
        protected int      $height,
        /**
         * Location of the map center.
         */
        protected Location $location,
        /**
         * Map scale; 1-3.
         */
        protected int      $scale,
        /**
         * Map width in pixels before applying scale; 16-1024.
         */
        protected int      $width,
        /**
         * Map zoom level; 13-20.
         */
        protected int      $zoom,
    ) {}

    public static function fromArray(array $array): GetMapThumbnailFile
    {
        return new static(
            chatId  : $array['chat_id'],
            height  : $array['height'],
            location: TdSchemaRegistry::fromArray($array['location']),
            scale   : $array['scale'],
            width   : $array['width'],
            zoom    : $array['zoom'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getScale(): int
    {
        return $this->scale;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getZoom(): int
    {
        return $this->zoom;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setLocation(Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setScale(int $value): static
    {
        $this->scale = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function setZoom(int $value): static
    {
        $this->zoom = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'height'   => $this->height,
            'location' => $this->location->jsonSerialize(),
            'scale'    => $this->scale,
            'width'    => $this->width,
            'zoom'     => $this->zoom,
        ];
    }
}
