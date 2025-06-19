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
    public const TYPE_NAME = 'messagePaidMedia';

    public function __construct(
        /**
         * Number of Telegram Stars needed to buy access to the media in the message.
         */
        protected int           $starCount,
        /**
         * Information about the media.
         *
         * @var PaidMedia[]
         */
        protected array         $media,
        /**
         * Media caption.
         */
        protected FormattedText $caption,
        /**
         * True, if the caption must be shown above the media; otherwise, the caption must be shown below the media.
         */
        protected bool          $showCaptionAboveMedia
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaidMedia
    {
        return new static(
            $array['star_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'star_count'               => $this->starCount,
            array_map(fn($x) => $x->typeSerialize(), $this->media),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
        ];
    }
}
