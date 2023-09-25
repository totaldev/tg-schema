<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns emoji corresponding to a sticker. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object
 */
class GetStickerEmojis extends TdFunction
{
    public const TYPE_NAME = 'getStickerEmojis';

    /**
     * Sticker file identifier
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(InputFile $sticker)
    {
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): GetStickerEmojis
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }

    public function getSticker(): InputFile
    {
        return $this->sticker;
    }
}
