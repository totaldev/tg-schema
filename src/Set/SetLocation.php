<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the location of the current user. Needs to be called if getOption("is_location_visible") is true and location changes for more than 1 kilometer
 */
class SetLocation extends TdFunction
{
    public const TYPE_NAME = 'setLocation';

    /**
     * The new location of the user
     *
     * @var Location
     */
    protected Location $location;

    public function __construct(Location $location)
    {
        $this->location = $location;
    }

    public static function fromArray(array $array): SetLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'location' => $this->location->typeSerialize(),
        ];
    }

    public function getLocation(): Location
    {
        return $this->location;
    }
}
