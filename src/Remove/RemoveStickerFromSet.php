<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a sticker from the set to which it belongs. The sticker set must be owned by the current user.
 */
class RemoveStickerFromSet extends TdFunction
{
    public const TYPE_NAME = 'removeStickerFromSet';

    public function __construct(
        /**
         * Sticker to remove from the set.
         */
        protected InputFile $sticker
    ) {}

    public static function fromArray(array $array): RemoveStickerFromSet
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
