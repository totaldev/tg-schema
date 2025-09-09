<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Animation\Animation;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An animation message (GIF-style).
 */
class MessageAnimation extends MessageContent
{
    public const TYPE_NAME = 'messageAnimation';

    public function __construct(
        /**
         * The animation description.
         */
        protected Animation     $animation,
        /**
         * Animation caption.
         */
        protected FormattedText $caption,
        /**
         * True, if the caption must be shown above the animation; otherwise, the caption must be shown below the animation.
         */
        protected bool          $showCaptionAboveMedia,
        /**
         * True, if the animation preview must be covered by a spoiler animation.
         */
        protected bool          $hasSpoiler,
        /**
         * True, if the animation thumbnail must be blurred and the animation must be shown only while tapped.
         */
        protected bool          $isSecret,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageAnimation
    {
        return new static(
            TdSchemaRegistry::fromArray($array['animation']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function getAnimation(): Animation
    {
        return $this->animation;
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

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'animation'                => $this->animation->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'has_spoiler'              => $this->hasSpoiler,
            'is_secret'                => $this->isSecret,
        ];
    }
}
