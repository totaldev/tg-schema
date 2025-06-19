<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Affiliate\AffiliateInfo;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * The transaction is a sale of an upgraded gift; for regular users only.
 */
class StarTransactionTypeUpgradedGiftSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeUpgradedGiftSale';

    public function __construct(
        /**
         * Identifier of the user that bought the gift.
         */
        protected int           $userId,
        /**
         * The gift.
         */
        protected UpgradedGift  $gift,
        /**
         * Information about commission received by Telegram from the transaction.
         */
        protected AffiliateInfo $affiliate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeUpgradedGiftSale
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['gift']),
            TdSchemaRegistry::fromArray($array['affiliate']),
        );
    }

    public function getAffiliate(): AffiliateInfo
    {
        return $this->affiliate;
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            'gift'      => $this->gift->typeSerialize(),
            'affiliate' => $this->affiliate->typeSerialize(),
        ];
    }
}
