<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of poll voters.
 */
class PollVoters extends TdObject
{
    public const string TYPE_NAME = 'pollVoters';

    public function __construct(
        /**
         * Approximate total number of poll voters found.
         */
        protected int   $totalCount,
        /**
         * List of poll voters.
         *
         * @var PollVoter[]
         */
        protected array $voters,
    ) {}

    public static function fromArray(array $array): PollVoters
    {
        return new static(
            totalCount: $array['total_count'],
            voters    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['voters']),
        );
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getVoters(): array
    {
        return $this->voters;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function setVoters(array $value): static
    {
        $this->voters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'voters'      => array_map(static fn($x) => $x->jsonSerialize(), $this->voters),
        ];
    }
}
