<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message.
 */
class MessagePhoto extends MessageContent
{
    public const TYPE_NAME = 'messagePhoto';

    public function __construct(
        /**
         * The photo.
         */
        protected Photo         $photo,
        /**
         * Photo caption.
         */
        protected FormattedText $caption,
        /**
         * True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo.
         */
        protected bool          $showCaptionAboveMedia,
        /**
         * True, if the photo preview must be covered by a spoiler animation.
         */
        protected bool          $hasSpoiler,
        /**
         * True, if the photo must be blurred and must be shown only while tapped.
         */
        protected bool          $isSecret,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getIsSecret(): bool
    {
        return $this->isSecret;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'photo'                    => $this->photo->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'has_spoiler'              => $this->hasSpoiler,
            'is_secret'                => $this->isSecret,
        ];
    }
}
