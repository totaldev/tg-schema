<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Count;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a counter.
 */
class Count extends TdObject
{
    public const string TYPE_NAME = 'count';

    public function __construct(
        /**
         * Count.
         */
        protected int $count
    ) {}

    public static function fromArray(array $array): Count
    {
        return new static(
            $array['count'],
        );
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'count' => $this->count,
        ];
    }
}
