<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Count;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a counter
 */
class Count extends TdObject
{
    public const TYPE_NAME = 'count';

    /**
     * Count
     *
     * @var int
     */
    protected int $count;

    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public static function fromArray(array $array): Count
    {
        return new static(
            $array['count'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'count' => $this->count,
        ];
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
