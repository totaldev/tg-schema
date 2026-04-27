<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Live;

use Totaldev\TgSchema\Paid\PaidReactor;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of users and chats that spend most money on paid messages and reactions in a live story.
 */
class LiveStoryDonors extends TdObject
{
    public const string TYPE_NAME = 'liveStoryDonors';

    public function __construct(
        /**
         * List of top donors in the live story.
         *
         * @var PaidReactor[]
         */
        protected array $topDonors,
        /**
         * Total amount of spend Telegram Stars.
         */
        protected int   $totalStarCount,
    ) {}

    public static function fromArray(array $array): LiveStoryDonors
    {
        return new static(
            topDonors     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['top_donors']),
            totalStarCount: $array['total_star_count'],
        );
    }

    public function getTopDonors(): array
    {
        return $this->topDonors;
    }

    public function getTotalStarCount(): int
    {
        return $this->totalStarCount;
    }

    public function setTopDonors(array $value): static
    {
        $this->topDonors = $value;

        return $this;
    }

    public function setTotalStarCount(int $value): static
    {
        $this->totalStarCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'top_donors'       => array_map(static fn($x) => $x->jsonSerialize(), $this->topDonors),
            'total_star_count' => $this->totalStarCount,
        ];
    }
}
