<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authorization;

/**
 * The user must buy Telegram Premium as an in-store purchase to log in. Call checkAuthenticationPremiumPurchase and then
 * setAuthenticationPremiumPurchaseTransaction.
 */
class AuthorizationStateWaitPremiumPurchase extends AuthorizationState
{
    public const TYPE_NAME = 'authorizationStateWaitPremiumPurchase';

    public function __construct(
        /**
         * Identifier of the store product that must be bought.
         */
        protected string $storeProductId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitPremiumPurchase
    {
        return new static(
            $array['store_product_id'],
        );
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'store_product_id' => $this->storeProductId,
        ];
    }
}
