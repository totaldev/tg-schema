<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reuse;

use Totaldev\TgSchema\TdFunction;

/**
 * Reuses an active Telegram Star subscription to a channel chat and joins the chat again.
 */
class ReuseStarSubscription extends TdFunction
{
    public const string TYPE_NAME = 'reuseStarSubscription';

    public function __construct(
        /**
         * Identifier of the subscription.
         */
        protected string $subscriptionId
    ) {}

    public static function fromArray(array $array): ReuseStarSubscription
    {
        return new static(
            subscriptionId: $array['subscription_id'],
        );
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
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
            'subscription_id' => $this->subscriptionId,
        ];
    }
}
