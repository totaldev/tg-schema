<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * Increased maximum upload file size.
 */
class PremiumFeatureIncreasedUploadFileSize extends PremiumFeature
{
    public const TYPE_NAME = 'premiumFeatureIncreasedUploadFileSize';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumFeatureIncreasedUploadFileSize
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
