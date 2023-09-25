<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns reactions, which can be chosen for a story
 */
class GetStoryAvailableReactions extends TdFunction
{
    public const TYPE_NAME = 'getStoryAvailableReactions';

    /**
     * Number of reaction per row, 5-25
     *
     * @var int
     */
    protected int $rowSize;

    public function __construct(int $rowSize)
    {
        $this->rowSize = $rowSize;
    }

    public static function fromArray(array $array): GetStoryAvailableReactions
    {
        return new static(
            $array['row_size'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'row_size' => $this->rowSize,
        ];
    }

    public function getRowSize(): int
    {
        return $this->rowSize;
    }
}
