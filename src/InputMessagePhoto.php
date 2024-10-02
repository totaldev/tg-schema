<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A photo message
 */
class InputMessagePhoto extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessagePhoto';

    /**
     * Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20
     *
     * @var InputFile
     */
    protected InputFile $photo;

    /**
     * Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $thumbnail;

    /**
     * File identifiers of the stickers added to the photo, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    /**
     * Photo width
     *
     * @var int
     */
    protected int $width;

    /**
     * Photo height
     *
     * @var int
     */
    protected int $height;

    /**
     * Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Photo self-destruct time, in seconds (0-60). A non-zero self-destruct time can be specified only in private chats
     *
     * @var int
     */
    protected int $selfDestructTime;

    /**
     * True, if the photo preview must be covered by a spoiler animation; not supported in secret chats
     *
     * @var bool
     */
    protected bool $hasSpoiler;

    public function __construct(
        InputFile $photo,
        InputThumbnail $thumbnail,
        array $addedStickerFileIds,
        int $width,
        int $height,
        FormattedText $caption,
        int $selfDestructTime,
        bool $hasSpoiler
    ) {
        parent::__construct();

        $this->photo = $photo;
        $this->thumbnail = $thumbnail;
        $this->addedStickerFileIds = $addedStickerFileIds;
        $this->width = $width;
        $this->height = $height;
        $this->caption = $caption;
        $this->selfDestructTime = $selfDestructTime;
        $this->hasSpoiler = $hasSpoiler;
    }

    public static function fromArray(array $array): InputMessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            TdSchemaRegistry::fromArray($array['thumbnail']),
            $array['added_sticker_file_ids'],
            $array['width'],
            $array['height'],
            TdSchemaRegistry::fromArray($array['caption']),
            $array['self_destruct_time'],
            $array['has_spoiler'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
            'thumbnail' => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'width' => $this->width,
            'height' => $this->height,
            'caption' => $this->caption->typeSerialize(),
            'self_destruct_time' => $this->selfDestructTime,
            'has_spoiler' => $this->hasSpoiler,
        ];
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function getHeight(): int
    {
        return $this->height;
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
