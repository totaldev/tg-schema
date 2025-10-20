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
        protected string $storeProductId,
        /**
         * Email address to use for support if the user has issues with Telegram Premium purchase.
         */
        protected string $supportEmailAddress,
        /**
         * Subject for the email sent to the support email address.
         */
        protected string $supportEmailSubject,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthorizationStateWaitPremiumPurchase
    {
        return new static(
            $array['store_product_id'],
            $array['support_email_address'],
            $array['support_email_subject'],
        );
    }

    public function getStoreProductId(): string
    {
        return $this->storeProductId;
    }

    public function getSupportEmailAddress(): string
    {
        return $this->supportEmailAddress;
    }

    public function getSupportEmailSubject(): string
    {
        return $this->supportEmailSubject;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'store_product_id'      => $this->storeProductId,
            'support_email_address' => $this->supportEmailAddress,
            'support_email_subject' => $this->supportEmailSubject,
        ];
    }
}
