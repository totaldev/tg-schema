<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a possibly non-integer amount of Telegram Stars.
 */
class StarAmount extends TdObject
{
    public const TYPE_NAME = 'starAmount';

    public function __construct(
        /**
         * The integer amount of Telegram Stars rounded to 0.
         */
        protected int $starCount,
        /**
         * The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999.
         */
        protected int $nanostarCount
    ) {}

    public static function fromArray(array $array): StarAmount
    {
        return new static(
            $array['star_count'],
            $array['nanostar_count'],
        );
    }

    public function getNanostarCount(): int
    {
        return $this->nanostarCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'star_count'     => $this->starCount,
            'nanostar_count' => $this->nanostarCount,
        ];
    }
}
