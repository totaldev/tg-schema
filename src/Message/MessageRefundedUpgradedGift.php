<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGiftOrigin;

/**
 * A gift which purchase, upgrade or transfer were refunded.
 */
class MessageRefundedUpgradedGift extends MessageContent
{
    public const string TYPE_NAME = 'messageRefundedUpgradedGift';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift               $gift,
        /**
         * Origin of the upgraded gift.
         */
        protected UpgradedGiftOrigin $origin,
        /**
         * Receiver of the gift.
         */
        protected MessageSender      $receiverId,
        /**
         * Sender of the gift.
         */
        protected MessageSender      $senderId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageRefundedUpgradedGift
    {
        return new static(
            gift      : TdSchemaRegistry::fromArray($array['gift']),
            origin    : TdSchemaRegistry::fromArray($array['origin']),
            receiverId: TdSchemaRegistry::fromArray($array['receiver_id']),
            senderId  : TdSchemaRegistry::fromArray($array['sender_id']),
        );
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getOrigin(): UpgradedGiftOrigin
    {
        return $this->origin;
    }

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setOrigin(UpgradedGiftOrigin $value): static
    {
        $this->origin = $value;

        return $this;
    }

    public function setReceiverId(MessageSender $value): static
    {
        $this->receiverId = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'gift'        => $this->gift->jsonSerialize(),
            'origin'      => $this->origin->jsonSerialize(),
            'receiver_id' => $this->receiverId->jsonSerialize(),
            'sender_id'   => $this->senderId->jsonSerialize(),
        ];
    }
}
