<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a collection from gifts on the current user's or a channel's profile page; requires can_post_messages administrator right in the channel chat. An
 * owner can have up to getOption("gift_collection_count_max") gift collections. The new collection will be added to the end of the gift collection list of the
 * owner. Returns the created collection.
 */
class CreateGiftCollection extends TdFunction
{
    public const TYPE_NAME = 'createGiftCollection';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that received the gifts.
         */
        protected MessageSender $ownerId,
        /**
         * Name of the collection; 1-12 characters.
         */
        protected string        $name,
        /**
         * Identifier of the gifts to add to the collection; 0-getOption("gift_collection_gift_count_max") identifiers.
         *
         * @var string[]
         */
        protected array         $receivedGiftIds,
    ) {}

    public static function fromArray(array $array): CreateGiftCollection
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['name'],
            $array['received_gift_ids'],
        );
    }

    public function getName(): string
    {
        return $this->name;
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
            'name'              => $this->name,
            'received_gift_ids' => $this->receivedGiftIds,
        ];
    }
}
