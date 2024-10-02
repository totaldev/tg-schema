<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the content of a live location in an inline message sent via a bot; for bots only.
 */
class EditInlineMessageLiveLocation extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageLiveLocation';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string      $inlineMessageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup $replyMarkup,
        /**
         * New location content of the message; pass null to stop sharing the live location.
         */
        protected Location    $location,
        /**
         * New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever. Otherwise, must not exceed the current live_period by more than a day, and the live location expiration date must remain in the next 90 days. Pass 0 to keep the current live_period.
         */
        protected int         $livePeriod,
        /**
         * The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
         */
        protected int         $heading,
        /**
         * The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled.
         */
        protected int         $proximityAlertRadius,
    ) {}

    public static function fromArray(array $array): EditInlineMessageLiveLocation
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
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

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'inline_message_id'      => $this->inlineMessageId,
            'reply_markup'           => $this->replyMarkup->typeSerialize(),
            'location'               => $this->location->typeSerialize(),
            'live_period'            => $this->livePeriod,
            'heading'                => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }
}
