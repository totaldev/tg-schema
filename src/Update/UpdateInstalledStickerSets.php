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
    public const string TYPE_NAME = 'updateInstalledStickerSets';

    public function __construct(
        /**
         * The new list of installed ordinary sticker sets.
         *
         * @var int[]
         */
        protected array       $stickerSetIds,
        /**
         * Type of the affected stickers.
         */
        protected StickerType $stickerType,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateInstalledStickerSets
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
