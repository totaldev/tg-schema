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
    public const string TYPE_NAME = 'editInlineMessageCaption';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string         $inlineMessageId,
        /**
         * Pass true to show the caption above the media; otherwise, the caption will be shown below the media. May be true only for animation, photo, and video messages.
         */
        protected bool           $showCaptionAboveMedia,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
        /**
         * New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText $caption = null,
    ) {}

    public static function fromArray(array $array): EditInlineMessageCaption
    {
        return new static(
            $array['inline_message_id'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
            $array['show_caption_above_media'],
        );
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setShowCaptionAboveMedia(bool $value): static
    {
        $this->showCaptionAboveMedia = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'inline_message_id'        => $this->inlineMessageId,
            'reply_markup'             => $this->replyMarkup ?? null,
            'caption'                  => $this->caption ?? null,
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
