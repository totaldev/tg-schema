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
         * Number of Telegram Stars that sender paid for the gift.
         */
        protected int  $starCount,
        /**
         * True, if the message is about prepaid upgrade of the gift by another user instead of actual receiving of a new gift.
         */
        protected bool $isPrepaidUpgrade,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGift
    {
        return new static(
            $array['star_count'],
            $array['is_prepaid_upgrade'],
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
            'star_count'         => $this->starCount,
            'is_prepaid_upgrade' => $this->isPrepaidUpgrade,
        ];
    }
}
