<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Video\Video;

/**
 * A video message.
 */
class MessageVideo extends MessageContent
{
    public const TYPE_NAME = 'messageVideo';

    public function __construct(
        /**
         * The video description.
         */
        protected Video         $video,
        /**
         * Video caption.
         */
        protected FormattedText $caption,
        /**
         * True, if the caption must be shown above the video; otherwise, the caption must be shown below the video.
         */
        protected bool          $showCaptionAboveMedia,
        /**
         * True, if the video preview must be covered by a spoiler animation.
         */
        protected bool          $hasSpoiler,
        /**
         * True, if the video thumbnail must be blurred and the video must be shown only while tapped.
         */
        protected bool          $isSecret,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
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

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'video'                    => $this->video->typeSerialize(),
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'has_spoiler'              => $this->hasSpoiler,
            'is_secret'                => $this->isSecret,
        ];
    }
}
