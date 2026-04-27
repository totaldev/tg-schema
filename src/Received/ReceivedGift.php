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
    public const string TYPE_NAME = 'receivedGift';

    public function __construct(
        /**
         * True, if the gift is an upgraded gift that can be transferred to another owner; only for the receiver of the gift.
         */
        protected bool           $canBeTransferred,
        /**
         * True, if the gift is a regular gift that can be upgraded to a unique gift; only for the receiver of the gift.
         */
        protected bool           $canBeUpgraded,
        /**
         * Identifiers of collections to which the gift is added; only for the receiver of the gift.
         *
         * @var int[]
         */
        protected array          $collectionIds,
        /**
         * Point in time (Unix timestamp) when the gift was sent.
         */
        protected int            $date,
        /**
         * Number of Telegram Stars that must be paid to drop original details of the upgraded gift; 0 if not available; only for the receiver of the gift.
         */
        protected int            $dropOriginalDetailsStarCount,
        /**
         * Point in time (Unix timestamp) when the upgraded gift can be transferred to the TON blockchain as an NFT; can be in the past; 0 if NFT export isn't possible; only for the receiver of the gift.
         */
        protected int            $exportDate,
        /**
         * The gift.
         */
        protected SentGift       $gift,
        /**
         * True, if the gift is pinned to the top of the chat's profile page.
         */
        protected bool           $isPinned,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone are able to see them.
         */
        protected bool           $isPrivate,
        /**
         * True, if the gift is displayed on the chat's profile page; only for the receiver of the gift.
         */
        protected bool           $isSaved,
        /**
         * True, if the upgrade was bought after the gift was sent. In this case, prepaid upgrade cost must not be added to the gift cost.
         */
        protected bool           $isUpgradeSeparate,
        /**
         * Point in time (Unix timestamp) when the gift can be resold to another user; can be in the past; 0 if the gift can't be resold; only for the receiver of the gift.
         */
        protected int            $nextResaleDate,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to another owner; can be in the past; 0 if the gift can be transferred immediately or transfer isn't possible; only for the receiver of the gift.
         */
        protected int            $nextTransferDate,
        /**
         * If non-empty, then the user can pay for an upgrade of the gift using buyGiftUpgrade.
         */
        protected string         $prepaidUpgradeHash,
        /**
         * Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift.
         */
        protected int            $prepaidUpgradeStarCount,
        /**
         * Unique identifier of the received gift for the current user; only for the receiver of the gift.
         */
        protected string         $receivedGiftId,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the current user.
         */
        protected int            $sellStarCount,
        /**
         * Identifier of a user or a chat that sent the gift; may be null if unknown.
         */
        protected ?MessageSender $senderId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * Number of Telegram Stars that must be paid to transfer the upgraded gift; only for the receiver of the gift.
         */
        protected int            $transferStarCount,
        /**
         * True, if the gift was refunded and isn't available anymore.
         */
        protected bool           $wasRefunded,
    ) {}

    public static function fromArray(array $array): ReceivedGift
    {
        return new static(
            canBeTransferred            : $array['can_be_transferred'],
            canBeUpgraded               : $array['can_be_upgraded'],
            collectionIds               : $array['collection_ids'],
            date                        : $array['date'],
            dropOriginalDetailsStarCount: $array['drop_original_details_star_count'],
            exportDate                  : $array['export_date'],
            gift                        : TdSchemaRegistry::fromArray($array['gift']),
            isPinned                    : $array['is_pinned'],
            isPrivate                   : $array['is_private'],
            isSaved                     : $array['is_saved'],
            isUpgradeSeparate           : $array['is_upgrade_separate'],
            nextResaleDate              : $array['next_resale_date'],
            nextTransferDate            : $array['next_transfer_date'],
            prepaidUpgradeHash          : $array['prepaid_upgrade_hash'],
            prepaidUpgradeStarCount     : $array['prepaid_upgrade_star_count'],
            receivedGiftId              : $array['received_gift_id'],
            sellStarCount               : $array['sell_star_count'],
            senderId                    : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            text                        : TdSchemaRegistry::fromArray($array['text']),
            transferStarCount           : $array['transfer_star_count'],
            wasRefunded                 : $array['was_refunded'],
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

    public function getCollectionIds(): array
    {
        return $this->collectionIds;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getDropOriginalDetailsStarCount(): int
    {
        return $this->dropOriginalDetailsStarCount;
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

    public function getIsUpgradeSeparate(): bool
    {
        return $this->isUpgradeSeparate;
    }

    public function getNextResaleDate(): int
    {
        return $this->nextResaleDate;
    }

    public function getNextTransferDate(): int
    {
        return $this->nextTransferDate;
    }

    public function getPrepaidUpgradeHash(): string
    {
        return $this->prepaidUpgradeHash;
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

    public function setCanBeTransferred(bool $value): static
    {
        $this->canBeTransferred = $value;

        return $this;
    }

    public function setCanBeUpgraded(bool $value): static
    {
        $this->canBeUpgraded = $value;

        return $this;
    }

    public function setCollectionIds(array $value): static
    {
        $this->collectionIds = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

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

    public function setGift(SentGift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setIsPrivate(bool $value): static
    {
        $this->isPrivate = $value;

        return $this;
    }

    public function setIsSaved(bool $value): static
    {
        $this->isSaved = $value;

        return $this;
    }

    public function setIsUpgradeSeparate(bool $value): static
    {
        $this->isUpgradeSeparate = $value;

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

    public function setPrepaidUpgradeHash(string $value): static
    {
        $this->prepaidUpgradeHash = $value;

        return $this;
    }

    public function setPrepaidUpgradeStarCount(int $value): static
    {
        $this->prepaidUpgradeStarCount = $value;

        return $this;
    }

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function setSellStarCount(int $value): static
    {
        $this->sellStarCount = $value;

        return $this;
    }

    public function setSenderId(?MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setTransferStarCount(int $value): static
    {
        $this->transferStarCount = $value;

        return $this;
    }

    public function setWasRefunded(bool $value): static
    {
        $this->wasRefunded = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'can_be_transferred'               => $this->canBeTransferred,
            'can_be_upgraded'                  => $this->canBeUpgraded,
            'collection_ids'                   => $this->collectionIds,
            'date'                             => $this->date,
            'drop_original_details_star_count' => $this->dropOriginalDetailsStarCount,
            'export_date'                      => $this->exportDate,
            'gift'                             => $this->gift->jsonSerialize(),
            'is_pinned'                        => $this->isPinned,
            'is_private'                       => $this->isPrivate,
            'is_saved'                         => $this->isSaved,
            'is_upgrade_separate'              => $this->isUpgradeSeparate,
            'next_resale_date'                 => $this->nextResaleDate,
            'next_transfer_date'               => $this->nextTransferDate,
            'prepaid_upgrade_hash'             => $this->prepaidUpgradeHash,
            'prepaid_upgrade_star_count'       => $this->prepaidUpgradeStarCount,
            'received_gift_id'                 => $this->receivedGiftId,
            'sell_star_count'                  => $this->sellStarCount,
            'sender_id'                        => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'text'                             => $this->text->jsonSerialize(),
            'transfer_star_count'              => $this->transferStarCount,
            'was_refunded'                     => $this->wasRefunded,
        ];
    }
}
