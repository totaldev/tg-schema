<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * A user opened the Premium features screen from settings.
 */
class PremiumSourceSettings extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
