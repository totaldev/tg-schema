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
    public const TYPE_NAME = 'inputMessageVideo';

    public function __construct(
        /**
         * Video to be sent. The video is expected to be re-encoded to MPEG4 format with H.264 codec by the sender.
         */
        protected InputFile               $video,
        /**
         * Video thumbnail; pass null to skip thumbnail uploading.
         */
        protected InputThumbnail          $thumbnail,
        /**
         * Cover of the video; pass null to skip cover uploading; not supported in secret chats and for self-destructing messages.
         */
        protected InputFile               $cover,
        /**
         * Timestamp from which the video playing must start, in seconds.
         */
        protected int                     $startTimestamp,
        /**
         * File identifiers of the stickers added to the video, if applicable.
         *
         * @var int[]
         */
        protected array                   $addedStickerFileIds,
        /**
         * Duration of the video, in seconds.
         */
        protected int                     $duration,
        /**
         * Video width.
         */
        protected int                     $width,
        /**
         * Video height.
         */
        protected int                     $height,
        /**
         * True, if the video is expected to be streamed.
         */
        protected bool                    $supportsStreaming,
        /**
         * Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText           $caption,
        /**
         * True, if the caption must be shown above the video; otherwise, the caption must be shown below the video; not supported in secret chats.
         */
        protected bool                    $showCaptionAboveMedia,
        /**
         * Video self-destruct type; pass null if none; private chats only.
         */
        protected MessageSelfDestructType $selfDestructType,
        /**
         * True, if the video preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool                    $hasSpoiler,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            TdSchemaRegistry::fromArray($array['cover']),
            $array['start_timestamp'],
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['supports_streaming'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['show_caption_above_media'],
            TdSchemaRegistry::fromArray($array['self_destruct_type']),
            $array['has_spoiler'],
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getCover(): InputFile
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

    public function getSelfDestructType(): MessageSelfDestructType
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

    public function getThumbnail(): InputThumbnail
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

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'video'                    => $this->video->typeSerialize(),
            'thumbnail'                => $this->thumbnail->typeSerialize(),
            'cover'                    => $this->cover->typeSerialize(),
            'start_timestamp'          => $this->startTimestamp,
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'duration'                 => $this->duration,
            'width'                    => $this->width,
            'height'                   => $this->height,
            'supports_streaming'       => $this->supportsStreaming,
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'self_destruct_type'       => $this->selfDestructType->typeSerialize(),
            'has_spoiler'              => $this->hasSpoiler,
        ];
    }
}
