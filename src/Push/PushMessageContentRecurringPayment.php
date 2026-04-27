<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A new recurring payment was made by the current user.
 */
class PushMessageContentRecurringPayment extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentRecurringPayment';

    public function __construct(
        /**
         * The paid amount.
         */
        protected string $amount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentRecurringPayment
    {
        return new static(
            amount: $array['amount'],
        );
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(string $value): static
    {
        $this->amount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'amount' => $this->amount,
        ];
    }
}
