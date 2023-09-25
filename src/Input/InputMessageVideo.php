<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video message
 */
class InputMessageVideo extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageVideo';

    /**
     * File identifiers of the stickers added to the video, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Video caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Duration of the video, in seconds
     *
     * @var int
     */
    protected int $duration;

    /**
     * True, if the video preview must be covered by a spoiler animation; not supported in secret chats
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    /**
     * Video height
     *
     * @var int
     */
    protected int $height;

    /**
     * Video self-destruct type; pass null if none; private chats only
     *
     * @var MessageSelfDestructType
     */
    protected MessageSelfDestructType $selfDestructType;

    /**
     * True, if the video is supposed to be streamed
     *
     * @var bool
     */
    protected bool $supportsStreaming;

    /**
     * Video thumbnail; pass null to skip thumbnail uploading
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $thumbnail;

    /**
     * Video to be sent
     *
     * @var InputFile
     */
    protected InputFile $video;

    /**
     * Video width
     *
     * @var int
     */
    protected int $width;

    public function __construct(
        InputFile               $video,
        InputThumbnail          $thumbnail,
        array                   $addedStickerFileIds,
        int                     $duration,
        int                     $width,
        int                     $height,
        bool                    $supportsStreaming,
        FormattedText           $caption,
        MessageSelfDestructType $selfDestructType,
        bool                    $hasSpoiler,
    )
    {
        parent::__construct();

        $this->video = $video;
        $this->thumbnail = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->duration = $duration;
        $this->width = $width;
        $this->height = $height;
        $this->supportsStreaming = $supportsStreaming;
        $this->caption = $caption;
        $this->selfDestructType = $selfDestructType;
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
            '@type' => static::TYPE_NAME,
            'video' => $this->video->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'duration' => $this->duration,
            'width' => $this->width,
            'height' => $this->height,
            'supports_streaming' => $this->supportsStreaming,
            'caption' => $this->caption->typeSerialize(),
            'self_destruct_type' => $this->selfDestructType->typeSerialize(),
            'has_spoiler' => $this->hasSpoiler,
        ];
    }
}
