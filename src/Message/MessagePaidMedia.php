<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with paid media.
 */
class MessagePaidMedia extends MessageContent
{
    public const string TYPE_NAME = 'messagePaidMedia';

    public function __construct(
        /**
         * Media caption.
         */
        protected FormattedText $caption,
        /**
         * Information about the media.
         *
         * @var PaidMedia[]
         */
        protected array         $media,
        /**
         * True, if the caption must be shown above the media; otherwise, the caption must be shown below the media.
         */
        protected bool          $showCaptionAboveMedia,
        /**
         * Number of Telegram Stars needed to buy access to the media in the message.
         */
        protected int           $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaidMedia
    {
        return new static(
            caption              : TdSchemaRegistry::fromArray($array['caption']),
            media                : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            showCaptionAboveMedia: $array['show_caption_above_media'],
            starCount            : $array['star_count'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setMedia(array $value): static
    {
        $this->media = $value;

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
            'caption'                  => $this->caption->jsonSerialize(),
            'media'                    => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'star_count'               => $this->starCount,
        ];
    }
}
