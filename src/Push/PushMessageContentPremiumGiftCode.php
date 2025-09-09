<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a Telegram Premium gift code created for the user.
 */
class PushMessageContentPremiumGiftCode extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentPremiumGiftCode';

    public function __construct(
        /**
         * Number of months the Telegram Premium subscription will be active after code activation.
         */
        protected int $monthCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentPremiumGiftCode
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
