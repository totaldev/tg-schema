<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes a sticker from the list of favorite stickers
 */
class RemoveFavoriteSticker extends TdFunction
{
    public const TYPE_NAME = 'removeFavoriteSticker';

    /**
     * Sticker file to delete from the list
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(InputFile $sticker)
    {
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): RemoveFavoriteSticker
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
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
