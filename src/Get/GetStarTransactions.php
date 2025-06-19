<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Star\StarTransactionDirection;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the list of Telegram Star transactions for the specified owner.
 */
class GetStarTransactions extends TdFunction
{
    public const TYPE_NAME = 'getStarTransactions';

    public function __construct(
        /**
         * Identifier of the owner of the Telegram Stars; can be the identifier of the current user, identifier of an owned bot, or identifier of a supergroup or a channel chat with supergroupFullInfo.can_get_star_revenue_statistics == true.
         */
        protected MessageSender            $ownerId,
        /**
         * If non-empty, only transactions related to the Star Subscription will be returned.
         */
        protected string                   $subscriptionId,
        /**
         * Direction of the transactions to receive; pass null to get all transactions.
         */
        protected StarTransactionDirection $direction,
        /**
         * Offset of the first transaction to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                   $offset,
        /**
         * The maximum number of transactions to return.
         */
        protected int                      $limit,
    ) {}

    public static function fromArray(array $array): GetStarTransactions
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['subscription_id'],
            TdSchemaRegistry::fromArray($array['direction']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getDirection(): StarTransactionDirection
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'owner_id'        => $this->ownerId->typeSerialize(),
            'subscription_id' => $this->subscriptionId,
            'direction'       => $this->direction->typeSerialize(),
            'offset'          => $this->offset,
            'limit'           => $this->limit,
        ];
    }
}
