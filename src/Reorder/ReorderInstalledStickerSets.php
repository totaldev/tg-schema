<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the order of installed sticker sets
 */
class ReorderInstalledStickerSets extends TdFunction
{
    public const TYPE_NAME = 'reorderInstalledStickerSets';

    /**
     * Type of the sticker sets to reorder
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * Identifiers of installed sticker sets in the new correct order
     *
     * @var int[]
     */
    protected array $stickerSetIds;

    public function __construct(StickerType $stickerType, array $stickerSetIds)
    {
        $this->stickerType = $stickerType;
        $this->stickerSetIds = $stickerSetIds;
    }

    public static function fromArray(array $array): ReorderInstalledStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['sticker_set_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'sticker_set_ids' => $this->stickerSetIds,
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getStickerSetIds(): array
    {
        return $this->stickerSetIds;
    }
}
