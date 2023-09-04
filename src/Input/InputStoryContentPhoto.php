<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A photo story
 */
class InputStoryContentPhoto extends InputStoryContent
{
    public const TYPE_NAME = 'inputStoryContentPhoto';

    /**
     * Photo to send. The photo must be at most 10 MB in size. The photo size must be 1080x1920
     *
     * @var InputFile
     */
    protected InputFile $photo;

    /**
     * File identifiers of the stickers added to the photo, if applicable
     *
     * @var int[]
     */
    protected array $addedStickerFileIds;

    public function __construct(InputFile $photo, array $addedStickerFileIds)
    {
        parent::__construct();

        $this->photo = $photo;
        $this->addedStickerFileIds = $addedStickerFileIds;
    }

    public static function fromArray(array $array): InputStoryContentPhoto
    {
        return new static(
            TdSchemaRegistry::fromArray($array['photo']),
            $array['added_sticker_file_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'photo' => $this->photo->typeSerialize(),
            'added_sticker_file_ids' => $this->addedStickerFileIds,
        ];
    }

    public function getPhoto(): InputFile
    {
        return $this->photo;
    }

    public function getAddedStickerFileIds(): array
    {
        return $this->addedStickerFileIds;
    }
}
