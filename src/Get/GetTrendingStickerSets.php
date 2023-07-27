<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of trending sticker sets. For optimal performance, the number of returned sticker sets is chosen by TDLib
 */
class GetTrendingStickerSets extends TdFunction
{
    public const TYPE_NAME = 'getTrendingStickerSets';

    /**
     * Type of the sticker sets to return
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * The offset from which to return the sticker sets; must be non-negative
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached
     *
     * @var int
     */
    protected int $limit;

    public function __construct(StickerType $stickerType, int $offset, int $limit)
    {
        $this->stickerType = $stickerType;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetTrendingStickerSets
    {
        return new static(
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_type' => $this->stickerType->typeSerialize(),
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
