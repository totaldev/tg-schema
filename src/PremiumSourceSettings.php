<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A user opened the Premium features screen from settings
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
