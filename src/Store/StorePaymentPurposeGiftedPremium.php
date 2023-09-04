<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Store;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user gifted Telegram Premium to another user
 */
class StorePaymentPurposeGiftedPremium extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposeGiftedPremium';

    /**
     * Identifier of the user for which Premium was gifted
     *
     * @var int
     */
    protected int $userId;

    /**
     * ISO 4217 currency code of the payment currency
     *
     * @var string
     */
    protected string $currency;

    /**
     * Paid amount, in the smallest units of the currency
     *
     * @var int
     */
    protected int $amount;

    public function __construct(int $userId, string $currency, int $amount)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->currency = $currency;
        $this->amount = $amount;
    }

    public static function fromArray(array $array): StorePaymentPurposeGiftedPremium
    {
        return new static(
            $array['user_id'],
            $array['currency'],
            $array['amount'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'currency' => $this->currency,
            'amount' => $this->amount,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }
}
