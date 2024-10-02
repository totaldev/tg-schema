<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Store;

/**
 * The user creating Telegram Premium gift codes for other users.
 */
class StorePaymentPurposePremiumGiftCodes extends StorePaymentPurpose
{
    public const TYPE_NAME = 'storePaymentPurposePremiumGiftCodes';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by the users for duration of the Premium subscription and which is administered by the user; 0 if none.
         */
        protected int    $boostedChatId,
        /**
         * ISO 4217 currency code of the payment currency.
         */
        protected string $currency,
        /**
         * Paid amount, in the smallest units of the currency.
         */
        protected int    $amount,
        /**
         * Identifiers of the users which can activate the gift codes.
         *
         * @var int[]
         */
        protected array  $userIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StorePaymentPurposePremiumGiftCodes
    {
        return new static(
            $array['boosted_chat_id'],
            $array['currency'],
            $array['amount'],
            $array['user_ids'],
        );
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'boosted_chat_id' => $this->boostedChatId,
            'currency'        => $this->currency,
            'amount'          => $this->amount,
            'user_ids'        => $this->userIds,
        ];
    }
}
