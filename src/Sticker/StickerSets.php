<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of sticker sets.
 */
class StickerSets extends TdObject
{
    public const string TYPE_NAME = 'stickerSets';

    public function __construct(
        /**
         * List of sticker sets.
         *
         * @var StickerSetInfo[]
         */
        protected array $sets,
        /**
         * Approximate total number of sticker sets found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): StickerSets
    {
        return new static(
            sets      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['sets']),
            totalCount: $array['total_count'],
        );
    }

    public function getSets(): array
    {
        return $this->sets;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setSets(array $value): static
    {
        $this->sets = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'sets'        => array_map(static fn($x) => $x->jsonSerialize(), $this->sets),
            'total_count' => $this->totalCount,
        ];
    }
}
