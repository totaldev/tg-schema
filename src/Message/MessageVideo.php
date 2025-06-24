<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Alternative\AlternativeVideo;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Photo\Photo;
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
         * Alternative qualities of the video.
         *
         * @var AlternativeVideo[]
         */
        protected array         $alternativeVideos,
        /**
         * Cover of the video; may be null if none.
         */
        protected ?Photo        $cover,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int           $startTimestamp,
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
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['alternative_videos']),
            isset($array['cover']) ? TdSchemaRegistry::fromArray($array['cover']) : null,
            $array['start_timestamp'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
            $array['has_spoiler'],
            $array['is_secret'],
        );
    }

    public function getAlternativeVideos(): array
    {
        return $this->alternativeVideos;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getCover(): ?Photo
    {
        return $this->cover;
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

    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
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
            array_map(static fn($x) => $x->typeSerialize(), $this->alternativeVideos),
            'cover'                    => $this->cover ?? null,
            'start_timestamp'          => $this->startTimestamp,
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'has_spoiler'              => $this->hasSpoiler,
            'is_secret'                => $this->isSecret,
        ];
    }
}
