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
    public const string TYPE_NAME = 'affiliateProgramInfo';

    public function __construct(
        /**
         * The amount of daily revenue per user in Telegram Stars of the bot that created the affiliate program.
         */
        protected StarAmount                 $dailyRevenuePerUserAmount,
        /**
         * Point in time (Unix timestamp) when the affiliate program will be closed; 0 if the affiliate program isn't scheduled to be closed. If positive, then the program can't be connected using connectAffiliateProgram, but active connections will work until the date.
         */
        protected int                        $endDate,
        /**
         * Parameters of the affiliate program.
         */
        protected AffiliateProgramParameters $parameters,
    ) {}

    public static function fromArray(array $array): AffiliateProgramInfo
    {
        return new static(
            dailyRevenuePerUserAmount: TdSchemaRegistry::fromArray($array['daily_revenue_per_user_amount']),
            endDate                  : $array['end_date'],
            parameters               : TdSchemaRegistry::fromArray($array['parameters']),
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

    public function setDailyRevenuePerUserAmount(StarAmount $value): static
    {
        $this->dailyRevenuePerUserAmount = $value;

        return $this;
    }

    public function setEndDate(int $value): static
    {
        $this->endDate = $value;

        return $this;
    }

    public function setParameters(AffiliateProgramParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'daily_revenue_per_user_amount' => $this->dailyRevenuePerUserAmount->jsonSerialize(),
            'end_date'                      => $this->endDate,
            'parameters'                    => $this->parameters->jsonSerialize(),
        ];
    }
}
