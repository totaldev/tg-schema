<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of installed sticker sets was updated
 */
class UpdateInstalledStickerSets extends Update
{
    public const TYPE_NAME = 'updateInstalledStickerSets';

    /**
     * Type of the affected stickers
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * The new list of installed ordinary sticker sets
     *
     * @var int[]
     */
    protected array $stickerSetIds;

    public function __construct(StickerType $stickerType, array $stickerSetIds)
    {
        parent::__construct();

        $this->stickerType = $stickerType;
        $this->stickerSetIds = $stickerSetIds;
    }

    public static function fromArray(array $array): UpdateInstalledStickerSets
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
