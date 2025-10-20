<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a new sticker to the list of favorite stickers. The new sticker is added to the top of the list. If the sticker was already in the list, it is removed
 * from the list first. Only stickers belonging to a sticker set or in WEBP or WEBM format can be added to this list. Emoji stickers can't be added to favorite
 * stickers.
 */
class AddFavoriteSticker extends TdFunction
{
    public const TYPE_NAME = 'addFavoriteSticker';

    public function __construct(
        /**
         * Sticker file to add.
         */
        protected InputFile $sticker
    ) {}

    public static function fromArray(array $array): AddFavoriteSticker
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
