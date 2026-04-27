<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the order of installed sticker sets.
 */
class ReorderInstalledStickerSets extends TdFunction
{
    public const string TYPE_NAME = 'reorderInstalledStickerSets';

    public function __construct(
        /**
         * Identifiers of installed sticker sets in the new correct order.
         *
         * @var int[]
         */
        protected array       $stickerSetIds,
        /**
         * Type of the sticker sets to reorder.
         */
        protected StickerType $stickerType,
    ) {}

    public static function fromArray(array $array): ReorderInstalledStickerSets
    {
        return new static(
            stickerSetIds: $array['sticker_set_ids'],
            stickerType  : TdSchemaRegistry::fromArray($array['sticker_type']),
        );
    }

    public function getStickerSetIds(): array
    {
        return $this->stickerSetIds;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function setStickerSetIds(array $value): static
    {
        $this->stickerSetIds = $value;

        return $this;
    }

    public function setStickerType(StickerType $value): static
    {
        $this->stickerType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'sticker_set_ids' => $this->stickerSetIds,
            'sticker_type'    => $this->stickerType->jsonSerialize(),
        ];
    }
}
