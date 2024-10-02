<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSelfDestructType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo message.
 */
class InputMessagePhoto extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessagePhoto';

    public function __construct(
        /**
         * Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
         */
        protected InputFile               $photo,
        /**
         * Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats.
         */
        protected InputThumbnail          $thumbnail,
        /**
         * File identifiers of the stickers added to the photo, if applicable.
         *
         * @var int[]
         */
        protected array                   $addedStickerFileIds,
        /**
         * Photo width.
         */
        protected int                     $width,
        /**
         * Photo height.
         */
        protected int                     $height,
        /**
         * Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected FormattedText           $caption,
        /**
         * True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats.
         */
        protected bool                    $showCaptionAboveMedia,
        /**
         * Photo self-destruct type; pass null if none; private chats only.
         */
        protected MessageSelfDestructType $selfDestructType,
        /**
         * True, if the photo preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool                    $hasSpoiler,
    ) {
        parent::__construct();
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

    public function getHasSpoiler(): bool
    {
        return $this->hasSpoiler;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function getSelfDestructType(): MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getThumbnail(): InputThumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'photo'                    => $this->photo->typeSerialize(),
            'thumbnail'                => $this->thumbnail->typeSerialize(),
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'width'                    => $this->width,
            'height'                   => $this->height,
            'caption'                  => $this->caption->typeSerialize(),
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'self_destruct_type'       => $this->selfDestructType->typeSerialize(),
            'has_spoiler'              => $this->hasSpoiler,
        ];
    }
}
