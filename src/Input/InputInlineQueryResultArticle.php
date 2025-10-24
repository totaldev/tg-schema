<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to an article or web page.
 */
class InputInlineQueryResultArticle extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultArticle';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * URL of the result, if it exists.
         */
        protected string              $url,
        /**
         * Title of the result.
         */
        protected string              $title,
        /**
         * A short description of the result.
         */
        protected string              $description,
        /**
         * URL of the result thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Thumbnail width, if known.
         */
        protected int                 $thumbnailWidth,
        /**
         * Thumbnail height, if known.
         */
        protected int                 $thumbnailHeight,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultArticle
    {
        return new static(
            $array['id'],
            $array['url'],
            $array['title'],
            $array['description'],
            $array['thumbnail_url'],
            $array['thumbnail_width'],
            $array['thumbnail_height'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
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

    public function getUrl(): string
    {
        return $this->url;
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

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'url'                   => $this->url,
            'title'                 => $this->title,
            'description'           => $this->description,
            'thumbnail_url'         => $this->thumbnailUrl,
            'thumbnail_width'       => $this->thumbnailWidth,
            'thumbnail_height'      => $this->thumbnailHeight,
            'reply_markup'          => $this->replyMarkup ?? null,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
