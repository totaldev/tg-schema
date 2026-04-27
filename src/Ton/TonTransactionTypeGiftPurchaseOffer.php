<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Ton;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is an offer of gift purchase.
 */
class TonTransactionTypeGiftPurchaseOffer extends TonTransactionType
{
    public const string TYPE_NAME = 'tonTransactionTypeGiftPurchaseOffer';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift $gift
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TonTransactionTypeGiftPurchaseOffer
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
