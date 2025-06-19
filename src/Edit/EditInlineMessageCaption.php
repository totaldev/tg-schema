<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the caption of an inline message sent via a bot; for bots only.
 */
class EditInlineMessageCaption extends TdFunction
{
    public const TYPE_NAME = 'editInlineMessageCaption';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string        $inlineMessageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ReplyMarkup   $replyMarkup,
        /**
         * New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText $caption,
        /**
         * Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
         */
        protected bool          $showCaptionAboveMedia,
    ) {}

    public static function fromArray(array $array): EditInlineMessageCaption
    {
        return new static(
            $array['inline_message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'inline_message_id'        => $this->inlineMessageId,
            'reply_markup'             => $this->replyMarkup->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
