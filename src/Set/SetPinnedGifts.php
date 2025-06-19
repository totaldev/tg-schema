<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the list of pinned gifts on the current user's or the channel's profile page; requires can_post_messages administrator right in the channel chat.
 */
class SetPinnedGifts extends TdFunction
{
    public const TYPE_NAME = 'setPinnedGifts';

    public function __construct(
        /**
         * Identifier of the user or the channel chat that received the gifts.
         */
        protected MessageSender $ownerId,
        /**
         * New list of pinned gifts. All gifts must be upgraded and saved on the profile page first. There can be up to getOption("pinned_gift_count_max") pinned gifts.
         *
         * @var string[]
         */
        protected array         $receivedGiftIds
    ) {}

    public static function fromArray(array $array): SetPinnedGifts
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['received_gift_ids'],
        );
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
            'received_gift_ids' => $this->receivedGiftIds,
        ];
    }
}
