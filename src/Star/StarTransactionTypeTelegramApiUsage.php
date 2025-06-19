<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * The transaction is a payment for Telegram API usage; for bots only.
 */
class StarTransactionTypeTelegramApiUsage extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeTelegramApiUsage';

    public function __construct(
        /**
         * The number of billed requests.
         */
        protected int $requestCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeTelegramApiUsage
    {
        return new static(
            $array['request_count'],
        );
    }

    public function getRequestCount(): int
    {
        return $this->requestCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'request_count' => $this->requestCount,
        ];
    }
}
