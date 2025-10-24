<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with paid media; can be used only in channel chats with supergroupFullInfo.has_paid_media_allowed.
 */
class InputMessagePaidMedia extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessagePaidMedia';

    public function __construct(
        /**
         * The number of Telegram Stars that must be paid to see the media; 1-getOption("paid_media_message_star_count_max").
         */
        protected int            $starCount,
        /**
         * The content of the paid media.
         *
         * @var InputPaidMedia[]
         */
        protected array          $paidMedia,
        /**
         * True, if the caption must be shown above the media; otherwise, the caption must be shown below the media; not supported in secret chats.
         */
        protected bool           $showCaptionAboveMedia,
        /**
         * Bot-provided data for the paid media; bots only.
         */
        protected string         $payload,
        /**
         * Message caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText $caption = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePaidMedia
    {
        return new static(
            $array['star_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['paid_media']),
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
            $array['show_caption_above_media'],
            $array['payload'],
        );
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getPaidMedia(): array
    {
        return $this->paidMedia;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setPaidMedia(array $value): static
    {
        $this->paidMedia = $value;

        return $this;
    }

    public function setPayload(string $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function setShowCaptionAboveMedia(bool $value): static
    {
        $this->showCaptionAboveMedia = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'star_count'               => $this->starCount,
            'paid_media'               => array_map(static fn($x) => $x->typeSerialize(), $this->paidMedia),
            'caption'                  => $this->caption ?? null,
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'payload'                  => $this->payload,
        ];
    }
}
