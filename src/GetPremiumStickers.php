<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Returns premium stickers from regular sticker sets
 */
class GetPremiumStickers extends TdFunction
{
    public const TYPE_NAME = 'getPremiumStickers';

    /**
     * The maximum number of stickers to be returned; 0-100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $limit)
    {
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetPremiumStickers
    {
        return new static(
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
