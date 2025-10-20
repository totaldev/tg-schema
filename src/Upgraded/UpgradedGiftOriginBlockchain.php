<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

/**
 * The gift was assigned from blockchain and isn't owned by the current user. The gift can't be transferred, resold or withdrawn to blockchain.
 */
class UpgradedGiftOriginBlockchain extends UpgradedGiftOrigin
{
    public const TYPE_NAME = 'upgradedGiftOriginBlockchain';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): UpgradedGiftOriginBlockchain
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
