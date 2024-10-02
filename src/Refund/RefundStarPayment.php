<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Refund;

use Totaldev\TgSchema\TdFunction;

/**
 * Refunds a previously done payment in Telegram Stars.
 */
class RefundStarPayment extends TdFunction
{
    public const TYPE_NAME = 'refundStarPayment';

    public function __construct(
        /**
         * Identifier of the user that did the payment.
         */
        protected int    $userId,
        /**
         * Telegram payment identifier.
         */
        protected string $telegramPaymentChargeId,
    ) {}

    public static function fromArray(array $array): RefundStarPayment
    {
        return new static(
            $array['user_id'],
            $array['telegram_payment_charge_id'],
        );
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'user_id'                    => $this->userId,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
        ];
    }
}
