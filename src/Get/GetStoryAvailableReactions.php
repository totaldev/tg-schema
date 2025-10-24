<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns reactions, which can be chosen for a story.
 */
class GetStoryAvailableReactions extends TdFunction
{
    public const string TYPE_NAME = 'getStoryAvailableReactions';

    public function __construct(
        /**
         * Number of reaction per row, 5-25.
         */
        protected int $rowSize
    ) {}

    public static function fromArray(array $array): GetStoryAvailableReactions
    {
        return new static(
            $array['row_size'],
        );
    }

    public function getRowSize(): int
    {
        return $this->rowSize;
    }

    public function setRowSize(int $value): static
    {
        $this->rowSize = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'row_size' => $this->rowSize,
        ];
    }
}
