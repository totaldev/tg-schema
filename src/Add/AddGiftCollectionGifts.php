<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds gifts to the beginning of a previously created collection. If the collection is owned by a channel chat, then requires can_post_messages administrator
 * right in the channel chat. Returns the changed collection.
 */
class AddGiftCollectionGifts extends TdFunction
{
    public const string TYPE_NAME = 'addGiftCollectionGifts';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that owns the collection.
         */
        protected MessageSender $ownerId,
        /**
         * Identifier of the gift collection.
         */
        protected int           $collectionId,
        /**
         * Identifier of the gifts to add to the collection; 1-getOption("gift_collection_gift_count_max") identifiers. If after addition the collection has more than getOption("gift_collection_gift_count_max") gifts, then the last one are removed from the collection.
         *
         * @var string[]
         */
        protected array         $receivedGiftIds,
    ) {}

    public static function fromArray(array $array): AddGiftCollectionGifts
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['collection_id'],
            $array['received_gift_ids'],
        );
    }

    public function getCollectionId(): int
    {
        return $this->collectionId;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getReceivedGiftIds(): array
    {
        return $this->receivedGiftIds;
    }

    public function setCollectionId(int $value): static
    {
        $this->collectionId = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setReceivedGiftIds(array $value): static
    {
        $this->receivedGiftIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'owner_id'          => $this->ownerId->typeSerialize(),
            'collection_id'     => $this->collectionId,
            'received_gift_ids' => $this->receivedGiftIds,
        ];
    }
}
