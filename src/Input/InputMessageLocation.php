<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a location.
 */
class InputMessageLocation extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageLocation';

    public function __construct(
        /**
         * Location to be sent.
         */
        protected Location $location,
        /**
         * Period for which the location can be updated, in seconds; must be between 60 and 86400 for a temporary live location, 0x7FFFFFFF for permanent live location, and 0 otherwise.
         */
        protected int      $livePeriod,
        /**
         * For live locations, a direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
         */
        protected int      $heading,
        /**
         * For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled. Can't be enabled in channels and Saved Messages.
         */
        protected int      $proximityAlertRadius,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'location'               => $this->location->typeSerialize(),
            'live_period'            => $this->livePeriod,
            'heading'                => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }
}
