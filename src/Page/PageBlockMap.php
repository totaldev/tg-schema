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
    public const TYPE_NAME = 'pageBlockMap';

    public function __construct(
        /**
         * Location of the map center.
         */
        protected Location         $location,
        /**
         * Map zoom level.
         */
        protected int              $zoom,
        /**
         * Map width.
         */
        protected int              $width,
        /**
         * Map height.
         */
        protected int              $height,
        /**
         * Block caption.
         */
        protected PageBlockCaption $caption,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PageBlockMap
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['zoom'],
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['caption']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'zoom'     => $this->zoom,
            'width'    => $this->width,
            'height'   => $this->height,
            'caption'  => $this->caption->typeSerialize(),
        ];
    }
}
