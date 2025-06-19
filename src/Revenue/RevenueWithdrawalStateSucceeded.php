<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revenue;

/**
 * Withdrawal succeeded.
 */
class RevenueWithdrawalStateSucceeded extends RevenueWithdrawalState
{
    public const TYPE_NAME = 'revenueWithdrawalStateSucceeded';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the withdrawal was completed.
         */
        protected int    $date,
        /**
         * The URL where the withdrawal transaction can be viewed.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RevenueWithdrawalStateSucceeded
    {
        return new static(
            $array['date'],
            $array['url'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'date'  => $this->date,
            'url'   => $this->url,
        ];
    }
}
