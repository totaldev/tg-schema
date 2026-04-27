<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns premium stickers from regular sticker sets.
 */
class GetPremiumStickers extends TdFunction
{
    public const string TYPE_NAME = 'getPremiumStickers';

    public function __construct(
        /**
         * The maximum number of stickers to be returned; 0-100.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetPremiumStickers
    {
        return new static(
            limit: $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }
}
