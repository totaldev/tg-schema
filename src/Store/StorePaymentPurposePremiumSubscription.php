<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * The user subscribing to Telegram Premium.
 */
class StorePaymentPurposePremiumSubscription extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposePremiumSubscription';

    public function __construct(
        /**
         * Pass true if this is a restore of a Telegram Premium purchase; only for App Store.
         */
        protected bool $isRestore,
        /**
         * Pass true if this is an upgrade from a monthly subscription to early subscription; only for App Store.
         */
        protected bool $isUpgrade
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumSubscription
    {
        return new static(
            $array['is_restore'],
            $array['is_upgrade'],
        );
    }

    public function getIsRestore(): bool
    {
        return $this->isRestore;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'is_restore' => $this->isRestore,
            'is_upgrade' => $this->isUpgrade,
        ];
    }
}
