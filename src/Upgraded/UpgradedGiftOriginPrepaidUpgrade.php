<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The sender or receiver of the message has paid for upgraid of the gift, which has been completed.
 */
class UpgradedGiftOriginPrepaidUpgrade extends UpgradedGiftOrigin
{
    public const string TYPE_NAME = 'upgradedGiftOriginPrepaidUpgrade';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginPrepaidUpgrade
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
