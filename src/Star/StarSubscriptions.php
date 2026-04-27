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
    public const string TYPE_NAME = 'starSubscriptions';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string     $nextOffset,
        /**
         * The number of Telegram Stars required to buy to extend subscriptions expiring soon.
         */
        protected int        $requiredStarCount,
        /**
         * The amount of owned Telegram Stars.
         */
        protected StarAmount $starAmount,
        /**
         * List of subscriptions for Telegram Stars.
         *
         * @var StarSubscription[]
         */
        protected array      $subscriptions,
    ) {}

    public static function fromArray(array $array): StarSubscriptions
    {
        return new static(
            nextOffset       : $array['next_offset'],
            requiredStarCount: $array['required_star_count'],
            starAmount       : TdSchemaRegistry::fromArray($array['star_amount']),
            subscriptions    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['subscriptions']),
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

    public function getStarAmount(): StarAmount
    {
        return $this->starAmount;
    }

    public function getSubscriptions(): array
    {
        return $this->subscriptions;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setRequiredStarCount(int $value): static
    {
        $this->requiredStarCount = $value;

        return $this;
    }

    public function setStarAmount(StarAmount $value): static
    {
        $this->starAmount = $value;

        return $this;
    }

    public function setSubscriptions(array $value): static
    {
        $this->subscriptions = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'next_offset'         => $this->nextOffset,
            'required_star_count' => $this->requiredStarCount,
            'star_amount'         => $this->starAmount->jsonSerialize(),
            'subscriptions'       => array_map(static fn($x) => $x->jsonSerialize(), $this->subscriptions),
        ];
    }
}
