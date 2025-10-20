<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

use Totaldev\TgSchema\Star\StarAmount;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an active affiliate program.
 */
class AffiliateProgramInfo extends TdObject
{
    public const TYPE_NAME = 'affiliateProgramInfo';

    public function __construct(
        /**
         * Parameters of the affiliate program.
         */
        protected AffiliateProgramParameters $parameters,
        /**
         * Point in time (Unix timestamp) when the affiliate program will be closed; 0 if the affiliate program isn't scheduled to be closed. If positive, then the program can't be connected using connectAffiliateProgram, but active connections will work until the date.
         */
        protected int                        $endDate,
        /**
         * The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program.
         */
        protected StarAmount                 $dailyRevenuePerUserAmount,
    ) {}

    public static function fromArray(array $array): AffiliateProgramInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['parameters']),
            $array['end_date'],
            TdSchemaRegistry::fromArray($array['daily_revenue_per_user_amount']),
        );
    }

    public function getDailyRevenuePerUserAmount(): StarAmount
    {
        return $this->dailyRevenuePerUserAmount;
    }

    public function getEndDate(): int
    {
        return $this->endDate;
    }

    public function getParameters(): AffiliateProgramParameters
    {
        return $this->parameters;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'parameters'                    => $this->parameters->typeSerialize(),
            'end_date'                      => $this->endDate,
            'daily_revenue_per_user_amount' => $this->dailyRevenuePerUserAmount->typeSerialize(),
        ];
    }
}
