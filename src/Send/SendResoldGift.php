<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends an upgraded gift that is available for resale to another user or channel chat; gifts already owned by the current user must be transferred using
 * transferGift and can't be passed to the method.
 */
class SendResoldGift extends TdFunction
{
    public const TYPE_NAME = 'sendResoldGift';

    public function __construct(
        /**
         * Name of the upgraded gift to send.
         */
        protected string        $giftName,
        /**
         * Identifier of the user or the channel chat that will receive the gift.
         */
        protected MessageSender $ownerId,
        /**
         * The amount of Telegram Stars required to pay for the gift.
         */
        protected int           $starCount
    ) {}

    public static function fromArray(array $array): SendResoldGift
    {
        return new static(
            $array['gift_name'],
            TdSchemaRegistry::fromArray($array['owner_id']),
            $array['star_count'],
        );
    }

    public function getGiftName(): string
    {
        return $this->giftName;
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_name'  => $this->giftName,
            'owner_id'   => $this->ownerId->typeSerialize(),
            'star_count' => $this->starCount,
        ];
    }
}
