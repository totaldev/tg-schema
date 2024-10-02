<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Cancels or reenables Telegram Star subscription to a channel.
 */
class EditStarSubscription extends TdFunction
{
    public const TYPE_NAME = 'editStarSubscription';

    public function __construct(
        /**
         * Identifier of the subscription to change.
         */
        protected string $subscriptionId,
        /**
         * New value of is_canceled.
         */
        protected bool   $isCanceled,
    ) {}

    public static function fromArray(array $array): EditStarSubscription
    {
        return new static(
            $array['subscription_id'],
            $array['is_canceled'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'subscription_id' => $this->subscriptionId,
            'is_canceled'     => $this->isCanceled,
        ];
    }
}
