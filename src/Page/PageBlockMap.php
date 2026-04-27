<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A map.
 */
class PageBlockMap extends PageBlock
{
    public const string TYPE_NAME = 'pageBlockMap';

    public function __construct(
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
        /**
         * Map height.
         */
        protected int              $height,
        /**
         * Location of the map center.
         */
        protected Location         $location,
        /**
         * Map width.
         */
        protected int              $width,
        /**
         * Map zoom level.
         */
        protected int              $zoom,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockMap
    {
        return new static(
            caption : TdSchemaRegistry::fromArray($array['caption']),
            height  : $array['height'],
            location: TdSchemaRegistry::fromArray($array['location']),
            width   : $array['width'],
            zoom    : $array['zoom'],
        );
    }

    public function getCaption(): PageBlockCaption
    {
        return $this->caption;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getZoom(): int
    {
        return $this->zoom;
    }

    public function setCaption(PageBlockCaption $value): static
    {
        $this->caption = $value;

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
            'caption'  => $this->caption->jsonSerialize(),
            'height'   => $this->height,
            'location' => $this->location->jsonSerialize(),
            'width'    => $this->width,
            'zoom'     => $this->zoom,
        ];
    }
}
