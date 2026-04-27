<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video message.
 */
class InputMessageVideo extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageVideo';

    public function __construct(
        /**
         * File identifiers of the stickers added to the video, if applicable.
         *
         * @var int[]
         */
        protected array                    $addedStickerFileIds,
        /**
         * Duration of the video, in seconds.
         */
        protected int                      $duration,
        /**
         * True, if the video preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool                     $hasSpoiler,
        /**
         * Video height.
         */
        protected int                      $height,
        /**
         * True, if the caption must be shown above the video; otherwise, the caption must be shown below the video; not supported in secret chats.
         */
        protected bool                     $showCaptionAboveMedia,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int                      $startTimestamp,
        /**
         * True, if the video is expected to be streamed.
         */
        protected bool                     $supportsStreaming,
        /**
         * Video to be sent. The video is expected to be re-encoded to MPEG4 format with H.264 codec by the sender.
         */
        protected InputFile                $video,
        /**
         * Video width.
         */
        protected int                      $width,
        /**
         * Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText           $caption = null,
        /**
         * Cover of the video; pass null to skip cover uploading; not supported in secret chats and for self-destructing messages.
         */
        protected ?InputFile               $cover = null,
        /**
         * Video self-destruct type; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType = null,
        /**
         * Video thumbnail; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail          $thumbnail = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVideo
    {
        return new static(
            addedStickerFileIds  : $array['added_sticker_file_ids'],
            caption              : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            cover                : (isset($array['cover']) ? TdSchemaRegistry::fromArray($array['cover']) : null),
            duration             : $array['duration'],
            hasSpoiler           : $array['has_spoiler'],
            height               : $array['height'],
            selfDestructType     : (isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null),
            showCaptionAboveMedia: $array['show_caption_above_media'],
            startTimestamp       : $array['start_timestamp'],
            supportsStreaming    : $array['supports_streaming'],
            thumbnail            : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            video                : TdSchemaRegistry::fromArray($array['video']),
            width                : $array['width'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getCaption(): ?FormattedText
    {
        return $this->caption;
    }

    public function getCover(): ?InputFile
    {
        return $this->cover;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getStartTimestamp(): int
    {
        return $this->startTimestamp;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getVideo(): InputFile
    {
        return $this->video;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setAddedStickerFileIds(array $value): static
    {
        $this->addedStickerFileIds = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setCover(?InputFile $value): static
    {
        $this->cover = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setHasSpoiler(bool $value): static
    {
        $this->hasSpoiler = $value;

        return $this;
    }

    public function setHeight(int $value): static
    {
        $this->height = $value;

        return $this;
    }

    public function setSelfDestructType(?MessageSelfDestructType $value): static
    {
        $this->selfDestructType = $value;

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

    public function setSupportsStreaming(bool $value): static
    {
        $this->supportsStreaming = $value;

        return $this;
    }

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setVideo(InputFile $value): static
    {
        $this->video = $value;

        return $this;
    }

    public function setWidth(int $value): static
    {
        $this->width = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'caption'                  => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'cover'                    => (null !== $this->cover ? $this->cover->jsonSerialize() : null),
            'duration'                 => $this->duration,
            'has_spoiler'              => $this->hasSpoiler,
            'height'                   => $this->height,
            'self_destruct_type'       => (null !== $this->selfDestructType ? $this->selfDestructType->jsonSerialize() : null),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'start_timestamp'          => $this->startTimestamp,
            'supports_streaming'       => $this->supportsStreaming,
            'thumbnail'                => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'video'                    => $this->video->jsonSerialize(),
            'width'                    => $this->width,
        ];
    }
}
