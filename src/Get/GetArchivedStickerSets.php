<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of archived sticker sets
 */
class GetArchivedStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getArchivedStickerSets';

    /**
     * The maximum number of sticker sets to return; up to 100
     *
     * @var int
     */
    protected int $limit;

    /**
     * Identifier of the sticker set from which to return the result
     *
     * @var int
     */
    protected int $offsetStickerSetId;

    /**
     * Type of the sticker sets to return
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    public function __construct(StickerType $stickerType, int $offsetStickerSetId, int $limit)
    {
        $this->stickerType = $stickerType;
        $this->offsetStickerSetId = $offsetStickerSetId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetArchivedStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['offset_sticker_set_id'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetStickerSetId(): int
    {
        return $this->offsetStickerSetId;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'offset_sticker_set_id' => $this->offsetStickerSetId,
            'limit' => $this->limit,
        ];
    }
}
