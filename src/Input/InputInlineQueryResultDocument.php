<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to a file.
 */
class InputInlineQueryResultDocument extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultDocument';

    public function __construct(
        /**
         * Short description of the result, if known.
         */
        protected string              $description,
        /**
         * URL of the file.
         */
        protected string              $documentUrl,
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageDocument, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * MIME type of the file content; only "application/pdf" and "application/zip" are currently allowed.
         */
        protected string              $mimeType,
        /**
         * Height of the thumbnail.
         */
        protected int                 $thumbnailHeight,
        /**
         * The URL of the file thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Width of the thumbnail.
         */
        protected int                 $thumbnailWidth,
        /**
         * Title of the resulting file.
         */
        protected string              $title,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultDocument
    {
        return new static(
            description        : $array['description'],
            documentUrl        : $array['document_url'],
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            mimeType           : $array['mime_type'],
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailHeight    : $array['thumbnail_height'],
            thumbnailUrl       : $array['thumbnail_url'],
            thumbnailWidth     : $array['thumbnail_width'],
            title              : $array['title'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getDocumentUrl(): string
    {
        return $this->documentUrl;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
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

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setDocumentUrl(string $value): static
    {
        $this->documentUrl = $value;

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

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

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
            'description'           => $this->description,
            'document_url'          => $this->documentUrl,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'mime_type'             => $this->mimeType,
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_height'      => $this->thumbnailHeight,
            'thumbnail_url'         => $this->thumbnailUrl,
            'thumbnail_width'       => $this->thumbnailWidth,
            'title'                 => $this->title,
        ];
    }
}
