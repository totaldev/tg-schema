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
use Totaldev\TgSchema\Video\VideoStoryboard;

/**
 * A video message.
 */
class MessageVideo extends MessageContent
{
    public const string TYPE_NAME = 'messageVideo';

    public function __construct(
        /**
         * Alternative qualities of the video.
         *
         * @var AlternativeVideo[]
         */
        protected array         $alternativeVideos,
        /**
         * Video caption.
         */
        protected FormattedText $caption,
        /**
         * Cover of the video; may be null if none.
         */
        protected ?Photo        $cover,
        /**
         * True, if the video preview must be covered by a spoiler animation.
         */
        protected bool          $hasSpoiler,
        /**
         * True, if the video thumbnail must be blurred and the video must be shown only while tapped.
         */
        protected bool          $isSecret,
        /**
         * True, if the caption must be shown above the video; otherwise, the caption must be shown below the video.
         */
        protected bool          $showCaptionAboveMedia,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int           $startTimestamp,
        /**
         * Available storyboards for the video.
         *
         * @var VideoStoryboard[]
         */
        protected array         $storyboards,
        /**
         * The video description.
         */
        protected Video         $video,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageVideo
    {
        return new static(
            alternativeVideos    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['alternative_videos']),
            caption              : TdSchemaRegistry::fromArray($array['caption']),
            cover                : (isset($array['cover']) ? TdSchemaRegistry::fromArray($array['cover']) : null),
            hasSpoiler           : $array['has_spoiler'],
            isSecret             : $array['is_secret'],
            showCaptionAboveMedia: $array['show_caption_above_media'],
            startTimestamp       : $array['start_timestamp'],
            storyboards          : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['storyboards']),
            video                : TdSchemaRegistry::fromArray($array['video']),
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

    public function getStoryboards(): array
    {
        return $this->storyboards;
    }

    public function getVideo(): Video
    {
        return $this->video;
    }

    public function setAlternativeVideos(array $value): static
    {
        $this->alternativeVideos = $value;

        return $this;
    }

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setCover(?Photo $value): static
    {
        $this->cover = $value;

        return $this;
    }

    public function setHasSpoiler(bool $value): static
    {
        $this->hasSpoiler = $value;

        return $this;
    }

    public function setIsSecret(bool $value): static
    {
        $this->isSecret = $value;

        return $this;
    }

    public function setShowCaptionAboveMedia(bool $value): static
    {
        $this->showCaptionAboveMedia = $value;

        return $this;
    }

    public function setStartTimestamp(int $value): static
    {
        $this->startTimestamp = $value;

        return $this;
    }

    public function setStoryboards(array $value): static
    {
        $this->storyboards = $value;

        return $this;
    }

    public function setVideo(Video $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'alternative_videos'       => array_map(static fn($x) => $x->jsonSerialize(), $this->alternativeVideos),
            'caption'                  => $this->caption->jsonSerialize(),
            'cover'                    => (null !== $this->cover ? $this->cover->jsonSerialize() : null),
            'has_spoiler'              => $this->hasSpoiler,
            'is_secret'                => $this->isSecret,
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'start_timestamp'          => $this->startTimestamp,
            'storyboards'              => array_map(static fn($x) => $x->jsonSerialize(), $this->storyboards),
            'video'                    => $this->video->jsonSerialize(),
        ];
    }
}
