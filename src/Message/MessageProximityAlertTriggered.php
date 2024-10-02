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
    public const TYPE_NAME = 'messageProximityAlertTriggered';

    public function __construct(
        /**
         * The identifier of a user or chat that triggered the proximity alert.
         */
        protected MessageSender $travelerId,
        /**
         * The identifier of a user or chat that subscribed for the proximity alert.
         */
        protected MessageSender $watcherId,
        /**
         * The distance between the users.
         */
        protected int           $distance,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageProximityAlertTriggered
    {
        return new static(
            TdSchemaRegistry::fromArray($array['traveler_id']),
            TdSchemaRegistry::fromArray($array['watcher_id']),
            $array['distance'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'traveler_id' => $this->travelerId->typeSerialize(),
            'watcher_id'  => $this->watcherId->typeSerialize(),
            'distance'    => $this->distance,
        ];
    }
}
