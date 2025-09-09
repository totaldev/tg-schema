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
    public const TYPE_NAME = 'giveawayPrizePremium';

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
            $array['month_count'],
        );
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'month_count' => $this->monthCount,
        ];
    }
}
