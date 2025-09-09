<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A user in the chat came within proximity alert range from the current user.
 */
class PushMessageContentProximityAlertTriggered extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentProximityAlertTriggered';

    public function __construct(
        /**
         * The distance to the user.
         */
        protected int $distance
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentProximityAlertTriggered
    {
        return new static(
            $array['distance'],
        );
    }

    public function getDistance(): int
    {
        return $this->distance;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'distance' => $this->distance,
        ];
    }
}
