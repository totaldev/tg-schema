<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes a gift collection. If the collection is owned by a channel chat, then requires can_post_messages administrator right in the channel chat.
 */
class DeleteGiftCollection extends TdFunction
{
    public const string TYPE_NAME = 'deleteGiftCollection';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that owns the collection.
         */
        protected MessageSender $ownerId,
        /**
         * Identifier of the gift collection.
         */
        protected int           $collectionId,
    ) {}

    public static function fromArray(array $array): DeleteGiftCollection
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['collection_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'owner_id'      => $this->ownerId->typeSerialize(),
            'collection_id' => $this->collectionId,
        ];
    }
}
