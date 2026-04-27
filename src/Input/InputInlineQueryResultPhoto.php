<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents link to a JPEG image.
 */
class InputInlineQueryResultPhoto extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultPhoto';

    public function __construct(
        /**
         * A short description of the result, if known.
         */
        protected string              $description,
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Height of the photo.
         */
        protected int                 $photoHeight,
        /**
         * The URL of the JPEG photo (photo size must not exceed 5MB).
         */
        protected string              $photoUrl,
        /**
         * Width of the photo.
         */
        protected int                 $photoWidth,
        /**
         * URL of the photo thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Title of the result, if known.
         */
        protected string              $title,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultPhoto
    {
        return new static(
            description        : $array['description'],
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            photoHeight        : $array['photo_height'],
            photoUrl           : $array['photo_url'],
            photoWidth         : $array['photo_width'],
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailUrl       : $array['thumbnail_url'],
            title              : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getPhotoHeight(): int
    {
        return $this->photoHeight;
    }

    public function getPhotoUrl(): string
    {
        return $this->photoUrl;
    }

    public function getPhotoWidth(): int
    {
        return $this->photoWidth;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
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

    public function setPhotoHeight(int $value): static
    {
        $this->photoHeight = $value;

        return $this;
    }

    public function setPhotoUrl(string $value): static
    {
        $this->photoUrl = $value;

        return $this;
    }

    public function setPhotoWidth(int $value): static
    {
        $this->photoWidth = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setThumbnailUrl(string $value): static
    {
        $this->thumbnailUrl = $value;

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
            'description'           => $this->description,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'photo_height'          => $this->photoHeight,
            'photo_url'             => $this->photoUrl,
            'photo_width'           => $this->photoWidth,
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_url'         => $this->thumbnailUrl,
            'title'                 => $this->title,
        ];
    }
}
