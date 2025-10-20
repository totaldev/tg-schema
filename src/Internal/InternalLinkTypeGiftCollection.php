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
    public const TYPE_NAME = 'internalLinkTypeGiftCollection';

    public function __construct(
        /**
         * Username of the owner of the gift collection.
         */
        protected string $giftOwnerUsername,
        /**
         * Gift collection identifier.
         */
        protected int    $collectionId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeGiftCollection
    {
        return new static(
            $array['gift_owner_username'],
            $array['collection_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'gift_owner_username' => $this->giftOwnerUsername,
            'collection_id'       => $this->collectionId,
        ];
    }
}
