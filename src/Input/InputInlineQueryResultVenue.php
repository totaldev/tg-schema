<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Venue\Venue;

/**
 * Represents information about a venue.
 */
class InputInlineQueryResultVenue extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultVenue';

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
         * Venue result.
         */
        protected Venue               $venue,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultVenue
    {
        return new static(
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailHeight    : $array['thumbnail_height'],
            thumbnailUrl       : $array['thumbnail_url'],
            thumbnailWidth     : $array['thumbnail_width'],
            venue              : TdSchemaRegistry::fromArray($array['venue']),
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

    public function getVenue(): Venue
    {
        return $this->venue;
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

    public function setVenue(Venue $value): static
    {
        $this->venue = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_height'      => $this->thumbnailHeight,
            'thumbnail_url'         => $this->thumbnailUrl,
            'thumbnail_width'       => $this->thumbnailWidth,
            'venue'                 => $this->venue->jsonSerialize(),
        ];
    }
}
