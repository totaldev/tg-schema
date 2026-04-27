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
 * Edits the content of a live location in a message sent on behalf of a business account; for bots only.
 */
class EditBusinessMessageLiveLocation extends TdFunction
{
    public const string TYPE_NAME = 'editBusinessMessageLiveLocation';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string       $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int          $chatId,
        /**
         * The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown.
         */
        protected int          $heading,
        /**
         * New time relative to the message send date, for which the location can be updated, in seconds. If 0x7FFFFFFF specified, then the location can be updated forever. Otherwise, must not exceed the current live_period by more than a day, and the live location expiration date must remain in the next 90 days. Pass 0 to keep the current live_period.
         */
        protected int          $livePeriod,
        /**
         * Identifier of the message.
         */
        protected int          $messageId,
        /**
         * The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled.
         */
        protected int          $proximityAlertRadius,
        /**
         * New location content of the message; pass null to stop sharing the live location.
         */
        protected ?Location    $location = null,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageLiveLocation
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            heading             : $array['heading'],
            livePeriod          : $array['live_period'],
            location            : (isset($array['location']) ? TdSchemaRegistry::fromArray($array['location']) : null),
            messageId           : $array['message_id'],
            proximityAlertRadius: $array['proximity_alert_radius'],
            replyMarkup         : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getProximityAlertRadius(): int
    {
        return $this->proximityAlertRadius;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

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

    public function setLocation(?Location $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setProximityAlertRadius(int $value): static
    {
        $this->proximityAlertRadius = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'heading'                => $this->heading,
            'live_period'            => $this->livePeriod,
            'location'               => (null !== $this->location ? $this->location->jsonSerialize() : null),
            'message_id'             => $this->messageId,
            'proximity_alert_radius' => $this->proximityAlertRadius,
            'reply_markup'           => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
