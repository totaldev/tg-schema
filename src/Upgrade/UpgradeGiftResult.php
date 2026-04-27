<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgrade;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Upgraded\UpgradedGift;

/**
 * Contains result of gift upgrading.
 */
class UpgradeGiftResult extends TdObject
{
    public const string TYPE_NAME = 'upgradeGiftResult';

    public function __construct(
        /**
         * True, if the gift can be transferred to another owner.
         */
        protected bool         $canBeTransferred,
        /**
         * Number of Telegram Stars that must be paid to drop original details of the upgraded gift; 0 if not available.
         */
        protected int          $dropOriginalDetailsStarCount,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT; can be in the past.
         */
        protected int          $exportDate,
        /**
         * The upgraded gift.
         */
        protected UpgradedGift $gift,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page.
         */
        protected bool         $isSaved,
        /**
         * Point in time (Unix timestamp) when the gift can be resold to another user; can be in the past; 0 if the gift can't be resold; only for the receiver of the gift.
         */
        protected int          $nextResaleDate,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to another owner; can be in the past; 0 if the gift can be transferred immediately or transfer isn't possible.
         */
        protected int          $nextTransferDate,
        /**
         * Unique identifier of the received gift for the current user.
         */
        protected string       $receivedGiftId,
        /**
         * Number of Telegram Stars that must be paid to transfer the upgraded gift.
         */
        protected int          $transferStarCount,
    ) {}

    public static function fromArray(array $array): UpgradeGiftResult
    {
        return new static(
            canBeTransferred            : $array['can_be_transferred'],
            dropOriginalDetailsStarCount: $array['drop_original_details_star_count'],
            exportDate                  : $array['export_date'],
            gift                        : TdSchemaRegistry::fromArray($array['gift']),
            isSaved                     : $array['is_saved'],
            nextResaleDate              : $array['next_resale_date'],
            nextTransferDate            : $array['next_transfer_date'],
            receivedGiftId              : $array['received_gift_id'],
            transferStarCount           : $array['transfer_star_count'],
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

    public function getReceivedGiftId(): string
    {
        return $this->receivedGiftId;
    }

    public function getTransferStarCount(): int
    {
        return $this->transferStarCount;
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

    public function setReceivedGiftId(string $value): static
    {
        $this->receivedGiftId = $value;

        return $this;
    }

    public function setTransferStarCount(int $value): static
    {
        $this->transferStarCount = $value;

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
            'received_gift_id'                 => $this->receivedGiftId,
            'transfer_star_count'              => $this->transferStarCount,
        ];
    }
}
