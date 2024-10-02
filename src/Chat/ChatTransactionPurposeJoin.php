<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * User joined the channel and subscribed to regular payments in Telegram Stars.
 */
class ChatTransactionPurposeJoin extends ChatTransactionPurpose
{
    public const TYPE_NAME = 'chatTransactionPurposeJoin';

    public function __construct(
        /**
         * The number of seconds between consecutive Telegram Star debiting.
         */
        protected int $period
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTransactionPurposeJoin
    {
        return new static(
            $array['period'],
        );
    }

    public function getPeriod(): int
    {
        return $this->period;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'period' => $this->period,
        ];
    }
}
