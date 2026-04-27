<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a gift collection. Call searchPublicChat with the given username, then call getReceivedGifts with the received gift owner identifier
 * and the given collection identifier, then show the collection if received.
 */
class InternalLinkTypeGiftCollection extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeGiftCollection';

    public function __construct(
        /**
         * Gift collection identifier.
         */
        protected int    $collectionId,
        /**
         * Username of the owner of the gift collection.
         */
        protected string $giftOwnerUsername,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeGiftCollection
    {
        return new static(
            collectionId     : $array['collection_id'],
            giftOwnerUsername: $array['gift_owner_username'],
        );
    }

    public function getCollectionId(): int
    {
        return $this->collectionId;
    }

    public function getGiftOwnerUsername(): string
    {
        return $this->giftOwnerUsername;
    }

    public function setCollectionId(int $value): static
    {
        $this->collectionId = $value;

        return $this;
    }

    public function setGiftOwnerUsername(string $value): static
    {
        $this->giftOwnerUsername = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'collection_id'       => $this->collectionId,
            'gift_owner_username' => $this->giftOwnerUsername,
        ];
    }
}
