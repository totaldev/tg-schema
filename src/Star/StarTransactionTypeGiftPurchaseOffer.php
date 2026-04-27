<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is an offer of gift purchase; relevant for regular users only.
 */
class StarTransactionTypeGiftPurchaseOffer extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeGiftPurchaseOffer';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeGiftPurchaseOffer
    {
        return new static(
            gift: TdSchemaRegistry::fromArray($array['gift']),
        );
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gift'  => $this->gift->jsonSerialize(),
        ];
    }
}
