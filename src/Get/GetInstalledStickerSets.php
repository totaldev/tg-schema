<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of installed sticker sets
 */
class GetInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getInstalledStickerSets';

    /**
     * Type of the sticker sets to return
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    public function __construct(StickerType $stickerType)
    {
        $this->stickerType = $stickerType;
    }

    public static function fromArray(array $array): GetInstalledStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }
}
