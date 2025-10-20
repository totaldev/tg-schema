<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The gift was transferred from another owner.
 */
class UpgradedGiftOriginTransfer extends UpgradedGiftOrigin
{
    public const TYPE_NAME = 'upgradedGiftOriginTransfer';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginTransfer
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
