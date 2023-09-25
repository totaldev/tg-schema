<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a location
 */
class InputStoryAreaTypeLocation extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeLocation';

    /**
     * The location
     *
     * @var Location
     */
    protected Location $location;

    public function __construct(Location $location)
    {
        parent::__construct();

        $this->location = $location;
    }

    public static function fromArray(array $array): InputStoryAreaTypeLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
        ];
    }
}
