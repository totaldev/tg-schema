<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

/**
 * The maximum number of joined supergroups and channels
 */
class PremiumLimitTypeSupergroupCount extends PremiumLimitType
{
    public const TYPE_NAME = 'premiumLimitTypeSupergroupCount';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumLimitTypeSupergroupCount
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
