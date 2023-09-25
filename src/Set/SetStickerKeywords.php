<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the list of keywords of a sticker; for bots only. The sticker must belong to a regular or custom emoji sticker set created by the bot
 */
class SetStickerKeywords extends TdFunction
{
    public const TYPE_NAME = 'setStickerKeywords';

    /**
     * List of up to 20 keywords with total length up to 64 characters, which can be used to find the sticker
     *
     * @var string[]
     */
    protected array $keywords;

    /**
     * Sticker
     *
     * @var InputFile
     */
    protected InputFile $sticker;

    public function __construct(InputFile $sticker, array $keywords)
    {
        $this->sticker = $sticker;
        $this->keywords = $keywords;
    }

    public static function fromArray(array $array): SetStickerKeywords
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker']),
            $array['keywords'],
        );
    }

    public function getKeywords(): array
    {
        return $this->keywords;
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
            'keywords' => $this->keywords,
        ];
    }
}
