<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns network data usage statistics. Can be called before authorization.
 */
class GetNetworkStatistics extends TdFunction
{
    public const TYPE_NAME = 'getNetworkStatistics';

    public function __construct(
        /**
         * Pass true to get statistics only for the current library launch.
         */
        protected bool $onlyCurrent
    ) {}

    public static function fromArray(array $array): GetNetworkStatistics
    {
        return new static(
            $array['only_current'],
        );
    }

    public function getOnlyCurrent(): bool
    {
        return $this->onlyCurrent;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'only_current' => $this->onlyCurrent,
        ];
    }
}
