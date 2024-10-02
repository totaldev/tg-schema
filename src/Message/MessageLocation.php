<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a location.
 */
class MessageLocation extends MessageContent
{
    public const TYPE_NAME = 'messageLocation';

    public function __construct(
        /**
         * The location description.
         */
        protected Location $location,
        /**
         * Time relative to the message send date, for which the location can be updated, in seconds; if 0x7FFFFFFF, then location can be updated forever.
         */
        protected int      $livePeriod,
        /**
         * Left time for which the location can be updated, in seconds. If 0, then the location can't be updated anymore. The update updateMessageContent is not sent when this field changes.
         */
        protected int      $expiresIn,
        /**
         * For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown.
         */
        protected int      $heading,
        /**
         * For live locations, a maximum distance to another chat member for proximity alerts, in meters (0-100000). 0 if the notification is disabled. Available only to the message sender.
         */
        protected int      $proximityAlertRadius,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageLocation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['location']),
            $array['live_period'],
            $array['expires_in'],
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
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
            'expires_in'             => $this->expiresIn,
            'heading'                => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }
}
