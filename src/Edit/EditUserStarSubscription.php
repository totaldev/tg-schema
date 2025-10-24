<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Cancels or re-enables Telegram Star subscription for a user; for bots only.
 */
class EditUserStarSubscription extends TdFunction
{
    public const string TYPE_NAME = 'editUserStarSubscription';

    public function __construct(
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * Telegram payment identifier of the subscription.
         */
        protected string $telegramPaymentChargeId,
        /**
         * Pass true to cancel the subscription; pass false to allow the user to enable it.
         */
        protected bool   $isCanceled,
    ) {}

    public static function fromArray(array $array): EditUserStarSubscription
    {
        return new static(
            $array['user_id'],
            $array['telegram_payment_charge_id'],
            $array['is_canceled'],
        );
    }

    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    public function getTelegramPaymentChargeId(): string
    {
        return $this->telegramPaymentChargeId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setIsCanceled(bool $value): static
    {
        $this->isCanceled = $value;

        return $this;
    }

    public function setTelegramPaymentChargeId(string $value): static
    {
        $this->telegramPaymentChargeId = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'user_id'                    => $this->userId,
            'telegram_payment_charge_id' => $this->telegramPaymentChargeId,
            'is_canceled'                => $this->isCanceled,
        ];
    }
}
