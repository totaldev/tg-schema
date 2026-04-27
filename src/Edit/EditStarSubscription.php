<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Cancels or re-enables Telegram Star subscription.
 */
class EditStarSubscription extends TdFunction
{
    public const string TYPE_NAME = 'editStarSubscription';

    public function __construct(
        /**
         * New value of is_canceled.
         */
        protected bool   $isCanceled,
        /**
         * Identifier of the subscription to change.
         */
        protected string $subscriptionId,
    ) {}

    public static function fromArray(array $array): EditStarSubscription
    {
        return new static(
            isCanceled    : $array['is_canceled'],
            subscriptionId: $array['subscription_id'],
        );
    }

    public function getIsCanceled(): bool
    {
        return $this->isCanceled;
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    public function setIsCanceled(bool $value): static
    {
        $this->isCanceled = $value;

        return $this;
    }

    public function setSubscriptionId(string $value): static
    {
        $this->subscriptionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'is_canceled'     => $this->isCanceled,
            'subscription_id' => $this->subscriptionId,
        ];
    }
}
