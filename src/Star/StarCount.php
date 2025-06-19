<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a number of Telegram Stars.
 */
class StarCount extends TdObject
{
    public const TYPE_NAME = 'starCount';

    public function __construct(
        /**
         * Number of Telegram Stars.
         */
        protected int $starCount
    ) {}

    public static function fromArray(array $array): StarCount
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
