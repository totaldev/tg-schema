<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

/**
 * Improved download speed
 */
class PremiumFeatureImprovedDownloadSpeed extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureImprovedDownloadSpeed';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureImprovedDownloadSpeed
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
