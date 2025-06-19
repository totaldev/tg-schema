<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Public;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of public forwards and reposts as a story of a message or a story.
 */
class PublicForwards extends TdObject
{
    public const TYPE_NAME = 'publicForwards';

    public function __construct(
        /**
         * Approximate total number of messages and stories found.
         */
        protected int    $totalCount,
        /**
         * List of found public forwards and reposts.
         *
         * @var PublicForward[]
         */
        protected array  $forwards,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset
    ) {}

    public static function fromArray(array $array): PublicForwards
    {
        return new static(
            $array['total_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['forwards']),
            $array['next_offset'],
        );
    }

    public function getForwards(): array
    {
        return $this->forwards;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(fn($x) => $x->typeSerialize(), $this->forwards),
            'next_offset' => $this->nextOffset,
        ];
    }
}
