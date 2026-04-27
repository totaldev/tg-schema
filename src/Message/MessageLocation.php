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
    public const string TYPE_NAME = 'messageLocation';

    public function __construct(
        /**
         * Left time for which the location can be updated, in seconds. If 0, then the location can't be updated anymore. The update updateMessageContent is not sent when this field changes.
         */
        protected int      $expiresIn,
        /**
         * For live locations, a direction in which the location moves, in degrees; 1-360. If 0 the direction is unknown.
         */
        protected int      $heading,
        /**
         * Time relative to the message send date, for which the location can be updated, in seconds; if 0x7FFFFFFF, then location can be updated forever.
         */
        protected int      $livePeriod,
        /**
         * The location description.
         */
        protected Location $location,
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
            expiresIn           : $array['expires_in'],
            heading             : $array['heading'],
            livePeriod          : $array['live_period'],
            location            : TdSchemaRegistry::fromArray($array['location']),
            proximityAlertRadius: $array['proximity_alert_radius'],
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

    public function setExpiresIn(int $value): static
    {
        $this->expiresIn = $value;

        return $this;
    }

    public function setHeading(int $value): static
    {
        $this->heading = $value;

        return $this;
    }

    public function setLivePeriod(int $value): static
    {
        $this->livePeriod = $value;

        return $this;
    }

    public function setLocation(Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setProximityAlertRadius(int $value): static
    {
        $this->proximityAlertRadius = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'expires_in'             => $this->expiresIn,
            'heading'                => $this->heading,
            'live_period'            => $this->livePeriod,
            'location'               => $this->location->jsonSerialize(),
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }
}
