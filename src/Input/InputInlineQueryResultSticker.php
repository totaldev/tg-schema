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
    public const TYPE_NAME = 'inputInlineQueryResultSticker';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * URL of the sticker thumbnail, if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * The URL of the WEBP, TGS, or WEBM sticker (sticker file size must not exceed 5MB).
         */
        protected string              $stickerUrl,
        /**
         * Width of the sticker.
         */
        protected int                 $stickerWidth,
        /**
         * Height of the sticker.
         */
        protected int                 $stickerHeight,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageSticker, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultSticker
    {
        return new static(
            $array['id'],
            $array['thumbnail_url'],
            $array['sticker_url'],
            $array['sticker_width'],
            $array['sticker_height'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getReplyMarkup(): ReplyMarkup
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'thumbnail_url'         => $this->thumbnailUrl,
            'sticker_url'           => $this->stickerUrl,
            'sticker_width'         => $this->stickerWidth,
            'sticker_height'        => $this->stickerHeight,
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
