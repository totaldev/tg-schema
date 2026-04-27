<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Location\Location;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a point on the map.
 */
class InputInlineQueryResultLocation extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultLocation';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Amount of time relative to the message sent time until the location can be updated, in seconds.
         */
        protected int                 $livePeriod,
        /**
         * Location result.
         */
        protected Location            $location,
        /**
         * Thumbnail height, if known.
         */
        protected int                 $thumbnailHeight,
        /**
         * URL of the result thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Thumbnail width, if known.
         */
        protected int                 $thumbnailWidth,
        /**
         * Title of the result.
         */
        protected string              $title,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultLocation
    {
        return new static(
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            livePeriod         : $array['live_period'],
            location           : TdSchemaRegistry::fromArray($array['location']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailHeight    : $array['thumbnail_height'],
            thumbnailUrl       : $array['thumbnail_url'],
            thumbnailWidth     : $array['thumbnail_width'],
            title              : $array['title'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getLivePeriod(): int
    {
        return $this->livePeriod;
    }

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getThumbnailHeight(): int
    {
        return $this->thumbnailHeight;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getThumbnailWidth(): int
    {
        return $this->thumbnailWidth;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

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

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setThumbnailHeight(int $value): static
    {
        $this->thumbnailHeight = $value;

        return $this;
    }

    public function setThumbnailUrl(string $value): static
    {
        $this->thumbnailUrl = $value;

        return $this;
    }

    public function setThumbnailWidth(int $value): static
    {
        $this->thumbnailWidth = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'live_period'           => $this->livePeriod,
            'location'              => $this->location->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_height'      => $this->thumbnailHeight,
            'thumbnail_url'         => $this->thumbnailUrl,
            'thumbnail_width'       => $this->thumbnailWidth,
            'title'                 => $this->title,
        ];
    }
}
