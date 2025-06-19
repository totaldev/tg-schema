<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the position of a sticker in the set to which it belongs. The sticker set must be owned by the current user.
 */
class SetStickerPositionInSet extends TdFunction
{
    public const TYPE_NAME = 'setStickerPositionInSet';

    public function __construct(
        /**
         * Sticker.
         */
        protected InputFile $sticker,
        /**
         * New position of the sticker in the set, 0-based.
         */
        protected int       $position
    ) {}

    public static function fromArray(array $array): SetStickerPositionInSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['position'],
        );
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'sticker'  => $this->sticker->typeSerialize(),
            'position' => $this->position,
        ];
    }
}
