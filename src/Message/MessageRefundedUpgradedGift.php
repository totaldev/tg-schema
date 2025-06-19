<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A gift which purchase, upgrade or transfer were refunded.
 */
class MessageRefundedUpgradedGift extends MessageContent
{
    public const TYPE_NAME = 'messageRefundedUpgradedGift';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift          $gift,
        /**
         * Sender of the gift.
         */
        protected MessageSender $senderId,
        /**
         * Receiver of the gift.
         */
        protected MessageSender $receiverId,
        /**
         * True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift.
         */
        protected bool          $isUpgrade
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageRefundedUpgradedGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['receiver_id']),
            $array['is_upgrade'],
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'gift'        => $this->gift->typeSerialize(),
            'sender_id'   => $this->senderId->typeSerialize(),
            'receiver_id' => $this->receiverId->typeSerialize(),
            'is_upgrade'  => $this->isUpgrade,
        ];
    }
}
