<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The user subscribed to Telegram Premium
 */
class StorePaymentPurposePremiumSubscription extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposePremiumSubscription';

    /**
     * Pass true if this is a restore of a Telegram Premium purchase; only for App Store
     *
     * @var bool
     */
    protected bool $isRestore;

    /**
     * Pass true if this is an upgrade from a monthly subscription to early subscription; only for App Store
     *
     * @var bool
     */
    protected bool $isUpgrade;

    public function __construct(bool $isRestore, bool $isUpgrade)
    {
        parent::__construct();

        $this->isRestore = $isRestore;
        $this->isUpgrade = $isUpgrade;
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumSubscription
    {
        return new static(
            $array['is_restore'],
            $array['is_upgrade'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_restore' => $this->isRestore,
            'is_upgrade' => $this->isUpgrade,
        ];
    }

    public function getIsRestore(): bool
    {
        return $this->isRestore;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }
}
