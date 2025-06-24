<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Received;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Sent\SentGift;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a gift received by a user or a chat.
 */
class ReceivedGift extends TdObject
{
    public const TYPE_NAME = 'receivedGift';

    public function __construct(
        /**
         * Unique identifier of the received gift for the current user; only for the receiver of the gift.
         */
        protected string         $receivedGiftId,
        /**
         * Identifier of a user or a chat that sent the gift; may be null if unknown.
         */
        protected ?MessageSender $senderId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone are able to see them.
         */
        protected bool           $isPrivate,
        /**
         * True, if the gift is displayed on the chat's profile page; only for the receiver of the gift.
         */
        protected bool           $isSaved,
        /**
         * True, if the gift is pinned to the top of the chat's profile page.
         */
        protected bool           $isPinned,
        /**
         * True, if the gift is a regular gift that can be upgraded to a unique gift; only for the receiver of the gift.
         */
        protected bool           $canBeUpgraded,
        /**
         * True, if the gift is an upgraded gift that can be transferred to another owner; only for the receiver of the gift.
         */
        protected bool           $canBeTransferred,
        /**
         * True, if the gift was refunded and isn't available anymore.
         */
        protected bool           $wasRefunded,
        /**
         * Point in time (Unix timestamp) when the gift was sent.
         */
        protected int            $date,
        /**
         * The gift.
         */
        protected SentGift       $gift,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the current user.
         */
        protected int            $sellStarCount,
        /**
         * Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift.
         */
        protected int            $prepaidUpgradeStarCount,
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
         * Point in time (Unix timestamp) when the upgraded gift can be transferred to the TON blockchain as an NFT; 0 if NFT export isn't possible; only for the receiver of the gift.
         */
        protected int            $exportDate,
    ) {}

    public static function fromArray(array $array): ReceivedGift
    {
        return new static(
            $array['received_gift_id'],
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            TdSchemaRegistry::fromArray($array['text']),
            $array['is_private'],
            $array['is_saved'],
            $array['is_pinned'],
            $array['can_be_upgraded'],
            $array['can_be_transferred'],
            $array['was_refunded'],
            $array['date'],
            TdSchemaRegistry::fromArray($array['gift']),
            $array['sell_star_count'],
            $array['prepaid_upgrade_star_count'],
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

    public function getCanBeUpgraded(): bool
    {
        return $this->canBeUpgraded;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getExportDate(): int
    {
        return $this->exportDate;
    }

    public function getGift(): SentGift
    {
        return $this->gift;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
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

    public function getPrepaidUpgradeStarCount(): int
    {
        return $this->prepaidUpgradeStarCount;
    }

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getSellStarCount(): int
    {
        return $this->sellStarCount;
    }

    public function getSenderId(): ?MessageSender
    {
        return $this->senderId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getTransferStarCount(): int
    {
        return $this->transferStarCount;
    }

    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'received_gift_id'           => $this->receivedGiftId,
            'sender_id'                  => $this->senderId ?? null,
            'text'                       => $this->text->typeSerialize(),
            'is_private'                 => $this->isPrivate,
            'is_saved'                   => $this->isSaved,
            'is_pinned'                  => $this->isPinned,
            'can_be_upgraded'            => $this->canBeUpgraded,
            'can_be_transferred'         => $this->canBeTransferred,
            'was_refunded'               => $this->wasRefunded,
            'date'                       => $this->date,
            'gift'                       => $this->gift->typeSerialize(),
            'sell_star_count'            => $this->sellStarCount,
            'prepaid_upgrade_star_count' => $this->prepaidUpgradeStarCount,
            'transfer_star_count'        => $this->transferStarCount,
            'next_transfer_date'         => $this->nextTransferDate,
            'next_resale_date'           => $this->nextResaleDate,
            'export_date'                => $this->exportDate,
        ];
    }
}
