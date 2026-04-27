<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;
use Totaldev\TgSchema\Upgraded\UpgradedGiftOrigin;

/**
 * An upgraded gift was received or sent by the current user, or the current user was notified about a channel gift.
 */
class MessageUpgradedGift extends MessageContent
{
    public const string TYPE_NAME = 'messageUpgradedGift';

    public function __construct(
        /**
         * True, if the gift can be transferred to another owner; only for the receiver of the gift.
         */
        protected bool               $canBeTransferred,
        /**
         * Number of Telegram Stars that must be paid to drop original details of the upgraded gift; 0 if not available; only for the receiver of the gift.
         */
        protected int                $dropOriginalDetailsStarCount,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; can be in the past; 0 if NFT export isn't possible; only for the receiver of the gift.
         */
        protected int                $exportDate,
        /**
         * The gift.
         */
        protected UpgradedGift       $gift,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift.
         */
        protected bool               $isSaved,
        /**
         * Point in time (Unix timestamp) when the gift can be resold to another user; can be in the past; 0 if the gift can't be resold; only for the receiver of the gift.
         */
        protected int                $nextResaleDate,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to another owner; can be in the past; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift.
         */
        protected int                $nextTransferDate,
        /**
         * Origin of the upgraded gift.
         */
        protected UpgradedGiftOrigin $origin,
        /**
         * Unique identifier of the received gift for the current user; only for the receiver of the gift.
         */
        protected string             $receivedGiftId,
        /**
         * Receiver of the gift.
         */
        protected MessageSender      $receiverId,
        /**
         * Sender of the gift; may be null for anonymous gifts.
         */
        protected ?MessageSender     $senderId,
        /**
         * Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift.
         */
        protected int                $transferStarCount,
        /**
         * True, if the gift has already been transferred to another owner; only for the receiver of the gift.
         */
        protected bool               $wasTransferred,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageUpgradedGift
    {
        return new static(
            canBeTransferred            : $array['can_be_transferred'],
            dropOriginalDetailsStarCount: $array['drop_original_details_star_count'],
            exportDate                  : $array['export_date'],
            gift                        : TdSchemaRegistry::fromArray($array['gift']),
            isSaved                     : $array['is_saved'],
            nextResaleDate              : $array['next_resale_date'],
            nextTransferDate            : $array['next_transfer_date'],
            origin                      : TdSchemaRegistry::fromArray($array['origin']),
            receivedGiftId              : $array['received_gift_id'],
            receiverId                  : TdSchemaRegistry::fromArray($array['receiver_id']),
            senderId                    : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            transferStarCount           : $array['transfer_star_count'],
            wasTransferred              : $array['was_transferred'],
        );
    }

    public function getCanBeTransferred(): bool
    {
        return $this->canBeTransferred;
    }

    public function getDropOriginalDetailsStarCount(): int
    {
        return $this->dropOriginalDetailsStarCount;
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

    public function getNextResaleDate(): int
    {
        return $this->nextResaleDate;
    }

    public function getNextTransferDate(): int
    {
        return $this->nextTransferDate;
    }

    public function getOrigin(): UpgradedGiftOrigin
    {
        return $this->origin;
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

    public function setCanBeTransferred(bool $value): static
    {
        $this->canBeTransferred = $value;

        return $this;
    }

    public function setDropOriginalDetailsStarCount(int $value): static
    {
        $this->dropOriginalDetailsStarCount = $value;

        return $this;
    }

    public function setExportDate(int $value): static
    {
        $this->exportDate = $value;

        return $this;
    }

    public function setGift(UpgradedGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setIsSaved(bool $value): static
    {
        $this->isSaved = $value;

        return $this;
    }

    public function setNextResaleDate(int $value): static
    {
        $this->nextResaleDate = $value;

        return $this;
    }

    public function setNextTransferDate(int $value): static
    {
        $this->nextTransferDate = $value;

        return $this;
    }

    public function setOrigin(UpgradedGiftOrigin $value): static
    {
        $this->origin = $value;

        return $this;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function setReceiverId(MessageSender $value): static
    {
        $this->receiverId = $value;

        return $this;
    }

    public function setSenderId(?MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setTransferStarCount(int $value): static
    {
        $this->transferStarCount = $value;

        return $this;
    }

    public function setWasTransferred(bool $value): static
    {
        $this->wasTransferred = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'can_be_transferred'               => $this->canBeTransferred,
            'drop_original_details_star_count' => $this->dropOriginalDetailsStarCount,
            'export_date'                      => $this->exportDate,
            'gift'                             => $this->gift->jsonSerialize(),
            'is_saved'                         => $this->isSaved,
            'next_resale_date'                 => $this->nextResaleDate,
            'next_transfer_date'               => $this->nextTransferDate,
            'origin'                           => $this->origin->jsonSerialize(),
            'received_gift_id'                 => $this->receivedGiftId,
            'receiver_id'                      => $this->receiverId->jsonSerialize(),
            'sender_id'                        => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'transfer_star_count'              => $this->transferStarCount,
            'was_transferred'                  => $this->wasTransferred,
        ];
    }
}
