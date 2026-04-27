<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a gift.
 */
class PushMessageContentGift extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentGift';

    public function __construct(
        /**
         * True, if the message is about prepaid upgrade of the gift by another user instead of actual receiving of a new gift.
         */
        protected bool $isPrepaidUpgrade,
        /**
         * Number of Telegram Stars that sender paid for the gift.
         */
        protected int  $starCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGift
    {
        return new static(
            isPrepaidUpgrade: $array['is_prepaid_upgrade'],
            starCount       : $array['star_count'],
        );
    }

    public function getIsPrepaidUpgrade(): bool
    {
        return $this->isPrepaidUpgrade;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function setIsPrepaidUpgrade(bool $value): static
    {
        $this->isPrepaidUpgrade = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'is_prepaid_upgrade' => $this->isPrepaidUpgrade,
            'star_count'         => $this->starCount,
        ];
    }
}
