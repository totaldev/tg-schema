<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transfer;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends an upgraded gift to another user or a channel chat.
 */
class TransferGift extends TdFunction
{
    public const TYPE_NAME = 'transferGift';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request; for bots only.
         */
        protected string        $businessConnectionId,
        /**
         * Identifier of the gift.
         */
        protected string        $receivedGiftId,
        /**
         * Identifier of the user or the channel chat that will receive the gift.
         */
        protected MessageSender $newOwnerId,
        /**
         * The amount of Telegram Stars required to pay for the transfer.
         */
        protected int           $starCount,
    ) {}

    public static function fromArray(array $array): TransferGift
    {
        return new static(
            $array['business_connection_id'],
            $array['received_gift_id'],
            TdSchemaRegistry::fromArray($array['new_owner_id']),
            $array['star_count'],
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getNewOwnerId(): MessageSender
    {
        return $this->newOwnerId;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'received_gift_id'       => $this->receivedGiftId,
            'new_owner_id'           => $this->newOwnerId->typeSerialize(),
            'star_count'             => $this->starCount,
        ];
    }
}
