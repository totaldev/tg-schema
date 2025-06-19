<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Affiliate;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters of an affiliate program.
 */
class AffiliateProgramParameters extends TdObject
{
    public const TYPE_NAME = 'affiliateProgramParameters';

    public function __construct(
        /**
         * The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the program owner; getOption("affiliate_program_commission_per_mille_min")-getOption("affiliate_program_commission_per_mille_max").
         */
        protected int $commissionPerMille,
        /**
         * Number of months the program will be active; 0-36. If 0, then the program is eternal.
         */
        protected int $monthCount
    ) {}

    public static function fromArray(array $array): AffiliateProgramParameters
    {
        return new static(
            $array['commission_per_mille'],
            $array['month_count'],
        );
    }

    public function getCommissionPerMille(): int
    {
        return $this->commissionPerMille;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'commission_per_mille' => $this->commissionPerMille,
            'month_count'          => $this->monthCount,
        ];
    }
}
