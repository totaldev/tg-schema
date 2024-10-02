<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum length of sent media caption.
 */
class PremiumLimitTypeCaptionLength extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeCaptionLength';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeCaptionLength
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
