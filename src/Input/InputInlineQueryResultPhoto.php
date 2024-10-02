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
    public const TYPE_NAME = 'inputInlineQueryResultPhoto';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * Title of the result, if known.
         */
        protected string              $title,
        /**
         * A short description of the result, if known.
         */
        protected string              $description,
        /**
         * URL of the photo thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * The URL of the JPEG photo (photo size must not exceed 5MB).
         */
        protected string              $photoUrl,
        /**
         * Width of the photo.
         */
        protected int                 $photoWidth,
        /**
         * Height of the photo.
         */
        protected int                 $photoHeight,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessagePhoto, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultPhoto
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['description'],
            $array['thumbnail_url'],
            $array['photo_url'],
            $array['photo_width'],
            $array['photo_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getReplyMarkup(): ReplyMarkup
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'title'                 => $this->title,
            'description'           => $this->description,
            'thumbnail_url'         => $this->thumbnailUrl,
            'photo_url'             => $this->photoUrl,
            'photo_width'           => $this->photoWidth,
            'photo_height'          => $this->photoHeight,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
