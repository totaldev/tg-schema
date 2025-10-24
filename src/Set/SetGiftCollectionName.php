<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes name of a gift collection. If the collection is owned by a channel chat, then requires can_post_messages administrator right in the channel chat.
 * Returns the changed collection.
 */
class SetGiftCollectionName extends TdFunction
{
    public const string TYPE_NAME = 'setGiftCollectionName';

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
         * New name of the collection; 1-12 characters.
         */
        protected string        $name,
    ) {}

    public static function fromArray(array $array): SetGiftCollectionName
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['collection_id'],
            $array['name'],
        );
    }

    public function getCollectionId(): int
    {
        return $this->collectionId;
    }

    public function getName(): string
    {
        return $this->name;
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

    public function setName(string $value): static
    {
        $this->name = $value;

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
            'name'          => $this->name,
        ];
    }
}
