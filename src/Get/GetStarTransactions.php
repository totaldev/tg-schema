<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Transaction\TransactionDirection;

/**
 * Returns the list of Telegram Star transactions for the specified owner.
 */
class GetStarTransactions extends TdFunction
{
    public const string TYPE_NAME = 'getStarTransactions';

    public function __construct(
        /**
         * The maximum number of transactions to return.
         */
        protected int                   $limit,
        /**
         * Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                $offset,
        /**
         * Identifier of the owner of the Telegram Stars; can be the identifier of the current user, identifier of an owned bot, or identifier of a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
         */
        protected MessageSender         $ownerId,
        /**
         * If non-empty, only transactions related to the Star Subscription will be returned.
         */
        protected string                $subscriptionId,
        /**
         * Direction of the transactions to receive; pass null to get all transactions.
         */
        protected ?TransactionDirection $direction = null,
    ) {}

    public static function fromArray(array $array): GetStarTransactions
    {
        return new static(
            direction     : (isset($array['direction']) ? TdSchemaRegistry::fromArray($array['direction']) : null),
            limit         : $array['limit'],
            offset        : $array['offset'],
            ownerId       : TdSchemaRegistry::fromArray($array['owner_id']),
            subscriptionId: $array['subscription_id'],
        );
    }

    public function getDirection(): ?TransactionDirection
    {
        return $this->direction;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getSubscriptionId(): string
    {
        return $this->subscriptionId;
    }

    public function setDirection(?TransactionDirection $value): static
    {
        $this->direction = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

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
            'direction'       => (null !== $this->direction ? $this->direction->jsonSerialize() : null),
            'limit'           => $this->limit,
            'offset'          => $this->offset,
            'owner_id'        => $this->ownerId->jsonSerialize(),
            'subscription_id' => $this->subscriptionId,
        ];
    }
}
