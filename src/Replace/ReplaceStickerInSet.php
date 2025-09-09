<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Replace;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\Input\InputSticker;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Replaces existing sticker in a set. The function is equivalent to removeStickerFromSet, then addStickerToSet, then setStickerPositionInSet.
 */
class ReplaceStickerInSet extends TdFunction
{
    public const TYPE_NAME = 'replaceStickerInSet';

    public function __construct(
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int          $userId,
        /**
         * Sticker set name. The sticker set must be owned by the current user.
         */
        protected string       $name,
        /**
         * Sticker to remove from the set.
         */
        protected InputFile    $oldSticker,
        /**
         * Sticker to add to the set.
         */
        protected InputSticker $newSticker,
    ) {}

    public static function fromArray(array $array): ReplaceStickerInSet
    {
        return new static(
            $array['user_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['old_sticker']),
            TdSchemaRegistry::fromArray($array['new_sticker']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNewSticker(): InputSticker
    {
        return $this->newSticker;
    }

    public function getOldSticker(): InputFile
    {
        return $this->oldSticker;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'user_id'     => $this->userId,
            'name'        => $this->name,
            'old_sticker' => $this->oldSticker->typeSerialize(),
            'new_sticker' => $this->newSticker->typeSerialize(),
        ];
    }
}
