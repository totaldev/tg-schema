<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of Telegram Star subscriptions.
 */
class StarSubscriptions extends TdObject
{
    public const TYPE_NAME = 'starSubscriptions';

    public function __construct(
        /**
         * The amount of owned Telegram Stars.
         */
        protected int    $starCount,
        /**
         * List of subbscriptions for Telegram Stars.
         *
         * @var StarSubscription[]
         */
        protected array  $subscriptions,
        /**
         * The number of Telegram Stars required to buy to extend subscriptions expiring soon.
         */
        protected int    $requiredStarCount,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
    ) {}

    public static function fromArray(array $array): StarSubscriptions
    {
        return new static(
            $array['star_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['subscriptions']),
            $array['required_star_count'],
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getRequiredStarCount(): int
    {
        return $this->requiredStarCount;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'star_count'          => $this->starCount,
            array_map(fn($x) => $x->typeSerialize(), $this->subscriptions),
            'required_star_count' => $this->requiredStarCount,
            'next_offset'         => $this->nextOffset,
        ];
    }
}
