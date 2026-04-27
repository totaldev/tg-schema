<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo story.
 */
class InputStoryContentPhoto extends InputStoryContent
{
    public const string TYPE_NAME = 'inputStoryContentPhoto';

    public function __construct(
        /**
         * File identifiers of the stickers added to the photo, if applicable.
         *
         * @var int[]
         */
        protected array     $addedStickerFileIds,
        /**
         * Photo to send. The photo must be at most 10 MB in size. The photo size must be 1080x1920.
         */
        protected InputFile $photo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryContentPhoto
    {
        return new static(
            addedStickerFileIds: $array['added_sticker_file_ids'],
            photo              : TdSchemaRegistry::fromArray($array['photo']),
        );
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function setAddedStickerFileIds(array $value): static
    {
        $this->addedStickerFileIds = $value;

        return $this;
    }

    public function setPhoto(InputFile $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'added_sticker_file_ids' => $this->addedStickerFileIds,
            'photo'                  => $this->photo->jsonSerialize(),
        ];
    }
}
