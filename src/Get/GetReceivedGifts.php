<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns gifts received by the given user or chat.
 */
class GetReceivedGifts extends TdFunction
{
    public const TYPE_NAME = 'getReceivedGifts';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string        $businessConnectionId,
        /**
         * Identifier of the gift receiver.
         */
        protected MessageSender $ownerId,
        /**
         * Pass true to exclude gifts that aren't saved to the chat's profile page. Always true for gifts received by other users and channel chats without can_post_messages administrator right.
         */
        protected bool          $excludeUnsaved,
        /**
         * Pass true to exclude gifts that are saved to the chat's profile page. Always false for gifts received by other users and channel chats without can_post_messages administrator right.
         */
        protected bool          $excludeSaved,
        /**
         * Pass true to exclude gifts that can be purchased unlimited number of times.
         */
        protected bool          $excludeUnlimited,
        /**
         * Pass true to exclude gifts that can be purchased limited number of times.
         */
        protected bool          $excludeLimited,
        /**
         * Pass true to exclude upgraded gifts.
         */
        protected bool          $excludeUpgraded,
        /**
         * Pass true to sort results by gift price instead of send date.
         */
        protected bool          $sortByPrice,
        /**
         * Offset of the first entry to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string        $offset,
        /**
         * The maximum number of gifts to be returned; must be positive and can't be greater than 100. For optimal performance, the number of returned objects is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int           $limit,
    ) {}

    public static function fromArray(array $array): GetReceivedGifts
    {
        return new static(
            $array['business_connection_id'],
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['exclude_unsaved'],
            $array['exclude_saved'],
            $array['exclude_unlimited'],
            $array['exclude_limited'],
            $array['exclude_upgraded'],
            $array['sort_by_price'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getExcludeLimited(): bool
    {
        return $this->excludeLimited;
    }

    public function getExcludeSaved(): bool
    {
        return $this->excludeSaved;
    }

    public function getExcludeUnlimited(): bool
    {
        return $this->excludeUnlimited;
    }

    public function getExcludeUnsaved(): bool
    {
        return $this->excludeUnsaved;
    }

    public function getExcludeUpgraded(): bool
    {
        return $this->excludeUpgraded;
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

    public function getSortByPrice(): bool
    {
        return $this->sortByPrice;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'owner_id'               => $this->ownerId->typeSerialize(),
            'exclude_unsaved'        => $this->excludeUnsaved,
            'exclude_saved'          => $this->excludeSaved,
            'exclude_unlimited'      => $this->excludeUnlimited,
            'exclude_limited'        => $this->excludeLimited,
            'exclude_upgraded'       => $this->excludeUpgraded,
            'sort_by_price'          => $this->sortByPrice,
            'offset'                 => $this->offset,
            'limit'                  => $this->limit,
        ];
    }
}
