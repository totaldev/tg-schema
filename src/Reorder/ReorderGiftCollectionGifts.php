<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes order of gifts in a collection. If the collection is owned by a channel chat, then requires can_post_messages administrator right in the channel
 * chat. Returns the changed collection.
 */
class ReorderGiftCollectionGifts extends TdFunction
{
    public const TYPE_NAME = 'reorderGiftCollectionGifts';

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
         * Identifier of the gifts to move to the beginning of the collection. All other gifts are placed in the current order after the specified gifts.
         *
         * @var string[]
         */
        protected array         $receivedGiftIds,
    ) {}

    public static function fromArray(array $array): ReorderGiftCollectionGifts
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
