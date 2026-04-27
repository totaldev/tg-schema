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
    public const string TYPE_NAME = 'starAmount';

    public function __construct(
        /**
         * The number of 1/1000000000 shares of Telegram Stars; from -999999999 to 999999999.
         */
        protected int $nanostarCount,
        /**
         * The integer amount of Telegram Stars rounded to 0.
         */
        protected int $starCount,
    ) {}

    public static function fromArray(array $array): StarAmount
    {
        return new static(
            nanostarCount: $array['nanostar_count'],
            starCount    : $array['star_count'],
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

    public function setNanostarCount(int $value): static
    {
        $this->nanostarCount = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'nanostar_count' => $this->nanostarCount,
            'star_count'     => $this->starCount,
        ];
    }
}
