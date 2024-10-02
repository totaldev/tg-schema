<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of installed sticker sets was updated.
 */
class UpdateInstalledStickerSets extends Update
{
    public const TYPE_NAME = 'updateInstalledStickerSets';

    public function __construct(
        /**
         * Type of the affected stickers.
         */
        protected StickerType $stickerType,
        /**
         * The new list of installed ordinary sticker sets.
         *
         * @var int[]
         */
        protected array       $stickerSetIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateInstalledStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['sticker_set_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'sticker_type'    => $this->stickerType->typeSerialize(),
            'sticker_set_ids' => $this->stickerSetIds,
        ];
    }
}
