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
    public const string TYPE_NAME = 'inputMessagePhoto';

    public function __construct(
        /**
         * Photo to send. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20.
         */
        protected InputFile                $photo,
        /**
         * File identifiers of the stickers added to the photo, if applicable.
         *
         * @var int[]
         */
        protected array                    $addedStickerFileIds,
        /**
         * Photo width.
         */
        protected int                      $width,
        /**
         * Photo height.
         */
        protected int                      $height,
        /**
         * True, if the caption must be shown above the photo; otherwise, the caption must be shown below the photo; not supported in secret chats.
         */
        protected bool                     $showCaptionAboveMedia,
        /**
         * True, if the photo preview must be covered by a spoiler animation; not supported in secret chats.
         */
        protected bool                     $hasSpoiler,
        /**
         * Photo thumbnail to be sent; pass null to skip thumbnail uploading. The thumbnail is sent to the other party only in secret chats.
         */
        protected ?InputThumbnail          $thumbnail = null,
        /**
         * Photo caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText           $caption = null,
        /**
         * Photo self-destruct type; pass null if none; private chats only.
         */
        protected ?MessageSelfDestructType $selfDestructType = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessagePhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            $array['added_sticker_file_ids'],
            $array['width'],
            $array['height'],
            isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null,
            $array['show_caption_above_media'],
            isset($array['self_destruct_type']) ? TdSchemaRegistry::fromArray($array['self_destruct_type']) : null,
            $array['has_spoiler'],
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

    public function getSelfDestructType(): ?MessageSelfDestructType
    {
        return $this->selfDestructType;
    }

    public function getShowCaptionAboveMedia(): bool
    {
        return $this->showCaptionAboveMedia;
    }

    public function getThumbnail(): ?InputThumbnail
    {
        return $this->thumbnail;
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

    public function setPhoto(InputFile $value): static
    {
        $this->photo = $value;

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

    public function setThumbnail(?InputThumbnail $value): static
    {
        $this->thumbnail = $value;

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
            'photo'                    => $this->photo->typeSerialize(),
            'thumbnail'                => $this->thumbnail ?? null,
            'added_sticker_file_ids'   => $this->addedStickerFileIds,
            'width'                    => $this->width,
            'height'                   => $this->height,
            'caption'                  => $this->caption ?? null,
            'show_caption_above_media' => $this->showCaptionAboveMedia,
            'self_destruct_type'       => $this->selfDestructType ?? null,
            'has_spoiler'              => $this->hasSpoiler,
        ];
    }
}
