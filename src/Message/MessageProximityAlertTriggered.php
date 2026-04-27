<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user in the chat came within proximity alert range.
 */
class MessageProximityAlertTriggered extends MessageContent
{
    public const string TYPE_NAME = 'messageProximityAlertTriggered';

    public function __construct(
        /**
         * The distance between the users.
         */
        protected int           $distance,
        /**
         * The identifier of a user or chat that triggered the proximity alert.
         */
        protected MessageSender $travelerId,
        /**
         * The identifier of a user or chat that subscribed for the proximity alert.
         */
        protected MessageSender $watcherId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageProximityAlertTriggered
    {
        return new static(
            distance  : $array['distance'],
            travelerId: TdSchemaRegistry::fromArray($array['traveler_id']),
            watcherId : TdSchemaRegistry::fromArray($array['watcher_id']),
        );
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function getTravelerId(): MessageSender
    {
        return $this->travelerId;
    }

    public function getWatcherId(): MessageSender
    {
        return $this->watcherId;
    }

    public function setDistance(int $value): static
    {
        $this->distance = $value;

        return $this;
    }

    public function setTravelerId(MessageSender $value): static
    {
        $this->travelerId = $value;

        return $this;
    }

    public function setWatcherId(MessageSender $value): static
    {
        $this->watcherId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'distance'    => $this->distance,
            'traveler_id' => $this->travelerId->jsonSerialize(),
            'watcher_id'  => $this->watcherId->jsonSerialize(),
        ];
    }
}
