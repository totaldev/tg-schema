<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * An upgraded gift was received or sent by the current user, or the current user was notified about a channel gift.
 */
class MessageUpgradedGift extends MessageContent
{
    public const TYPE_NAME = 'messageUpgradedGift';

    public function __construct(
        /**
         * The gift.
         */
        protected UpgradedGift   $gift,
        /**
         * Sender of the gift; may be null for anonymous gifts.
         */
        protected ?MessageSender $senderId,
        /**
         * Receiver of the gift.
         */
        protected MessageSender  $receiverId,
        /**
         * Unique identifier of the received gift for the current user; only for the receiver of the gift.
         */
        protected string         $receivedGiftId,
        /**
         * True, if the gift was obtained by upgrading of a previously received gift; otherwise, this is a transferred or resold gift.
         */
        protected bool           $isUpgrade,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift.
         */
        protected bool           $isSaved,
        /**
         * True, if the gift can be transferred to another owner; only for the receiver of the gift.
         */
        protected bool           $canBeTransferred,
        /**
         * True, if the gift was transferred to another owner; only for the receiver of the gift.
         */
        protected bool           $wasTransferred,
        /**
         * Number of Telegram Stars that were paid by the sender for the gift; 0 if the gift was upgraded or transferred.
         */
        protected int            $lastResaleStarCount,
        /**
         * Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift.
         */
        protected int            $transferStarCount,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift.
         */
        protected int            $nextTransferDate,
        /**
         * Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift.
         */
        protected int            $nextResaleDate,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift.
         */
        protected int            $exportDate,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUpgradedGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            TdSchemaRegistry::fromArray($array['receiver_id']),
            $array['received_gift_id'],
            $array['is_upgrade'],
            $array['is_saved'],
            $array['can_be_transferred'],
            $array['was_transferred'],
            $array['last_resale_star_count'],
            $array['transfer_star_count'],
            $array['next_transfer_date'],
            $array['next_resale_date'],
            $array['export_date'],
        );
    }

    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    public function getExportDate(): int
    {
        return $this->exportDate;
    }

    public function getGift(): UpgradedGift
    {
        return $this->gift;
    }

    public function getIsSaved(): bool
    {
        return $this->isSaved;
    }

    public function getIsUpgrade(): bool
    {
        return $this->isUpgrade;
    }

    public function getLastResaleStarCount(): int
    {
        return $this->lastResaleStarCount;
    }

    public function getNextResaleDate(): int
    {
        return $this->nextResaleDate;
    }

    public function getNextTransferDate(): int
    {
        return $this->nextTransferDate;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
    }

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getTransferStarCount(): int
    {
        return $this->transferStarCount;
    }

    public function getWasTransferred(): bool
    {
        return $this->wasTransferred;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'gift'                   => $this->gift->typeSerialize(),
            'sender_id'              => $this->senderId ?? null,
            'receiver_id'            => $this->receiverId->typeSerialize(),
            'received_gift_id'       => $this->receivedGiftId,
            'is_upgrade'             => $this->isUpgrade,
            'is_saved'               => $this->isSaved,
            'can_be_transferred'     => $this->canBeTransferred,
            'was_transferred'        => $this->wasTransferred,
            'last_resale_star_count' => $this->lastResaleStarCount,
            'transfer_star_count'    => $this->transferStarCount,
            'next_transfer_date'     => $this->nextTransferDate,
            'next_resale_date'       => $this->nextResaleDate,
            'export_date'            => $this->exportDate,
        ];
    }
}
