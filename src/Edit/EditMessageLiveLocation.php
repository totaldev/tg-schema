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
 * Edits the message content of a live location. Messages can be edited for a limited period of time specified in the live location. Returns the edited message
 * after the edit is completed on the server side
 */
class EditMessageLiveLocation extends TdFunction
{
    public const TYPE_NAME = 'editMessageLiveLocation';

    /**
     * The chat the message belongs to
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The new direction in which the location moves, in degrees; 1-360. Pass 0 if unknown
     *
     * @var int
     */
    protected int $heading;

    /**
     * New location content of the message; pass null to stop sharing the live location
     *
     * @var Location
     */
    protected Location $location;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new maximum distance for proximity alerts, in meters (0-100000). Pass 0 if the notification is disabled
     *
     * @var int
     */
    protected int $proximityAlertRadius;

    /**
     * The new message reply markup; pass null if none; for bots only
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    public function __construct(
        int         $chatId,
        int         $messageId,
        ReplyMarkup $replyMarkup,
        Location    $location,
        int         $heading,
        int         $proximityAlertRadius,
    )
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->replyMarkup = $replyMarkup;
        $this->location = $location;
        $this->heading = $heading;
        $this->proximityAlertRadius = $proximityAlertRadius;
    }

    public static function fromArray(array $array): EditMessageLiveLocation
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['location']),
            $array['heading'],
            $array['proximity_alert_radius'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHeading(): int
    {
        return $this->heading;
    }

    public function getLocation(): Location
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

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'location' => $this->location->typeSerialize(),
            'heading' => $this->heading,
            'proximity_alert_radius' => $this->proximityAlertRadius,
        ];
    }
}
