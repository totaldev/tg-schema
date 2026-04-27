<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to a WEBP, TGS, or WEBM sticker.
 */
class InputInlineQueryResultSticker extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultSticker';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Height of the sticker.
         */
        protected int                 $stickerHeight,
        /**
         * The URL of the WEBP, TGS, or WEBM sticker (sticker file size must not exceed 5MB).
         */
        protected string              $stickerUrl,
        /**
         * Width of the sticker.
         */
        protected int                 $stickerWidth,
        /**
         * URL of the sticker thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultSticker
    {
        return new static(
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            stickerHeight      : $array['sticker_height'],
            stickerUrl         : $array['sticker_url'],
            stickerWidth       : $array['sticker_width'],
            thumbnailUrl       : $array['thumbnail_url'],
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

    public function getStickerHeight(): int
    {
        return $this->stickerHeight;
    }

    public function getStickerUrl(): string
    {
        return $this->stickerUrl;
    }

    public function getStickerWidth(): int
    {
        return $this->stickerWidth;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
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

    public function setStickerHeight(int $value): static
    {
        $this->stickerHeight = $value;

        return $this;
    }

    public function setStickerUrl(string $value): static
    {
        $this->stickerUrl = $value;

        return $this;
    }

    public function setStickerWidth(int $value): static
    {
        $this->stickerWidth = $value;

        return $this;
    }

    public function setThumbnailUrl(string $value): static
    {
        $this->thumbnailUrl = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'sticker_height'        => $this->stickerHeight,
            'sticker_url'           => $this->stickerUrl,
            'sticker_width'         => $this->stickerWidth,
            'thumbnail_url'         => $this->thumbnailUrl,
        ];
    }
}
