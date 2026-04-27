<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a list of trending sticker sets. For optimal performance, the number of returned sticker sets is chosen by TDLib.
 */
class GetTrendingStickerSets extends TdFunction
{
    public const string TYPE_NAME = 'getTrendingStickerSets';

    public function __construct(
        /**
         * The maximum number of sticker sets to be returned; up to 100. For optimal performance, the number of returned sticker sets is chosen by TDLib and can be smaller than the specified limit, even if the end of the list has not been reached.
         */
        protected int         $limit,
        /**
         * The offset from which to return the sticker sets; must be non-negative.
         */
        protected int         $offset,
        /**
         * Type of the sticker sets to return.
         */
        protected StickerType $stickerType,
    ) {}

    public static function fromArray(array $array): GetTrendingStickerSets
    {
        return new static(
            limit      : $array['limit'],
            offset     : $array['offset'],
            stickerType: TdSchemaRegistry::fromArray($array['sticker_type']),
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

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
            '@type'        => static::TYPE_NAME,
            'limit'        => $this->limit,
            'offset'       => $this->offset,
            'sticker_type' => $this->stickerType->jsonSerialize(),
        ];
    }
}
