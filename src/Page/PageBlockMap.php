<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A map
 */
class PageBlockMap extends PageBlock
{
    public const TYPE_NAME = 'pageBlockMap';

    /**
     * Block caption
     *
     * @var PageBlockCaption
     */
    protected PageBlockCaption $caption;

    /**
     * Map height
     *
     * @var int
     */
    protected int $height;

    /**
     * Location of the map center
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Map width
     *
     * @var int
     */
    protected int $width;

    /**
     * Map zoom level
     *
     * @var int
     */
    protected int $zoom;

    public function __construct(Location $location, int $zoom, int $width, int $height, PageBlockCaption $caption)
    {
        parent::__construct();

        $this->location = $location;
        $this->zoom = $zoom;
        $this->width = $width;
        $this->height = $height;
        $this->caption = $caption;
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
            '@type' => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
            'zoom' => $this->zoom,
            'width' => $this->width,
            'height' => $this->height,
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
