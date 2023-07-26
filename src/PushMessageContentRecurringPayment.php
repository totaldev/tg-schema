<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * A new recurring payment was made by the current user
 */
class PushMessageContentRecurringPayment extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentRecurringPayment';

    /**
     * The paid amount
     *
     * @var string
     */
    protected string $amount;

    public function __construct(string $amount)
    {
        parent::__construct();

        $this->amount = $amount;
    }

    public static function fromArray(array $array): PushMessageContentRecurringPayment
    {
        return new static(
            $array['amount'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'amount' => $this->amount,
        ];
    }

    public function getAmount(): string
    {
        return $this->amount;
    }
}
