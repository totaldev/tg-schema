<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An area pointing to a location
 */
class StoryAreaTypeLocation extends StoryAreaType
{
    public const TYPE_NAME = 'storyAreaTypeLocation';

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

    public static function fromArray(array $array): StoryAreaTypeLocation
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
