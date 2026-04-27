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
         * New message content caption; pass null to remove caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText $caption = null,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditInlineMessageCaption
    {
        return new static(
            caption              : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            inlineMessageId      : $array['inline_message_id'],
            replyMarkup          : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            showCaptionAboveMedia: $array['show_caption_above_media'],
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
            'caption'                  => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'inline_message_id'        => $this->inlineMessageId,
            'reply_markup'             => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
