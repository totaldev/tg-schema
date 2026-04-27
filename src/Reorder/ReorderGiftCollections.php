<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reorder;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes order of gift collections. If the collections are owned by a channel chat, then requires can_post_messages administrator right in the channel chat.
 */
class ReorderGiftCollections extends TdFunction
{
    public const string TYPE_NAME = 'reorderGiftCollections';

    public function __construct(
        /**
         * New order of gift collections.
         *
         * @var int[]
         */
        protected array         $collectionIds,
        /**
         * Identifier of the user or the channel chat that owns the collection.
         */
        protected MessageSender $ownerId,
    ) {}

    public static function fromArray(array $array): ReorderGiftCollections
    {
        return new static(
            collectionIds: $array['collection_ids'],
            ownerId      : TdSchemaRegistry::fromArray($array['owner_id']),
        );
    }

    public function getCollectionIds(): array
    {
        return $this->collectionIds;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function setCollectionIds(array $value): static
    {
        $this->collectionIds = $value;

        return $this;
    }

    public function setOwnerId(MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'collection_ids' => $this->collectionIds,
            'owner_id'       => $this->ownerId->jsonSerialize(),
        ];
    }
}
