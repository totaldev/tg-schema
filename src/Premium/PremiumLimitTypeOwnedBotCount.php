<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of owned bots.
 */
class PremiumLimitTypeOwnedBotCount extends PremiumLimitType
{
    public const string TYPE_NAME = 'premiumLimitTypeOwnedBotCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeOwnedBotCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
