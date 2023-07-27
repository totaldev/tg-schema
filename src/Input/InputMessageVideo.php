<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video message
 */
class InputMessageVideo extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVideo';

    /**
     * Video to be sent
     *
     * @var InputFile
     */
    protected InputFile $video;

    /**
     * Video thumbnail; pass null to skip thumbnail uploading
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $thumbnail;

    /**
     * File identifiers of the stickers added to the video, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Duration of the video, in seconds
     *
     * @var int
     */
    protected int $duration;

    /**
     * Video width
     *
     * @var int
     */
    protected int $width;

    /**
     * Video height
     *
     * @var int
     */
    protected int $height;

    /**
     * True, if the video is supposed to be streamed
     *
     * @var bool
     */
    protected bool $supportsStreaming;

    /**
     * Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Video self-destruct time, in seconds (0-60). A non-zero self-destruct time can be specified only in private chats
     *
     * @var int
     */
    protected int $selfDestructTime;

    /**
     * True, if the video preview must be covered by a spoiler animation; not supported in secret chats
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    public function __construct(
        InputFile $video,
        InputThumbnail $thumbnail,
        array $addedStickerFileIds,
        int $duration,
        int $width,
        int $height,
        bool $supportsStreaming,
        FormattedText $caption,
        int $selfDestructTime,
        bool $hasSpoiler,
    ) {
        parent::__construct();

        $this->video = $video;
        $this->thumbnail = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->supportsStreaming = $supportsStreaming;
        $this->caption = $caption;
        $this->selfDestructTime = $selfDestructTime;
        $this->hasSpoiler = $hasSpoiler;
    }

    public static function fromArray(array $array): InputMessageVideo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['video']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['added_sticker_file_ids'],
            $array['duration'],
            $array['width'],
            $array['height'],
            $array['supports_streaming'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['self_destruct_time'],
            $array['has_spoiler'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration' => $this->duration,
            'width' => $this->width,
            'height' => $this->height,
            'supports_streaming' => $this->supportsStreaming,
            'caption' => $this->caption->typeSerialize(),
            'self_destruct_time' => $this->selfDestructTime,
            'has_spoiler' => $this->hasSpoiler,
        ];
    }

    public function getVideo(): InputFile
    {
        return $this->video;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getSupportsStreaming(): bool
    {
        return $this->supportsStreaming;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getSelfDestructTime(): int
    {
        return $this->selfDestructTime;
    }

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }
}
