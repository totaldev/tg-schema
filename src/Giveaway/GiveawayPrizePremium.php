<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The giveaway sends Telegram Premium subscriptions to the winners.
 */
class GiveawayPrizePremium extends GiveawayPrize
{
    public const string TYPE_NAME = 'giveawayPrizePremium';

    public function __construct(
        /**
         * Number of months the Telegram Premium subscription will be active after code activation.
         */
        protected int $monthCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayPrizePremium
    {
        return new static(
            monthCount: $array['month_count'],
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function setMonthCount(int $value): static
    {
        $this->monthCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'month_count' => $this->monthCount,
        ];
    }
}
