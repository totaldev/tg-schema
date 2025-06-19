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
    public const TYPE_NAME = 'upgradeGiftResult';

    public function __construct(
        /**
         * The upgraded gift.
         */
        protected UpgradedGift $gift,
        /**
         * Unique identifier of the received gift for the current user.
         */
        protected string       $receivedGiftId,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page.
         */
        protected bool         $isSaved,
        /**
         * True, if the gift can be transferred to another owner.
         */
        protected bool         $canBeTransferred,
        /**
         * Number of Telegram Stars that must be paid to transfer the upgraded gift.
         */
        protected int          $transferStarCount,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to another owner; 0 if the gift can be transferred immediately or transfer isn't possible.
         */
        protected int          $nextTransferDate,
        /**
         * Point in time (Unix timestamp) when the gift can be resold to another user; 0 if the gift can't be resold; only for the receiver of the gift.
         */
        protected int          $nextResaleDate,
        /**
         * Point in time (Unix timestamp) when the gift can be transferred to the TON blockchain as an NFT.
         */
        protected int          $exportDate,
    ) {}

    public static function fromArray(array $array): UpgradeGiftResult
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            $array['received_gift_id'],
            $array['is_saved'],
            $array['can_be_transferred'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'gift'                => $this->gift->typeSerialize(),
            'received_gift_id'    => $this->receivedGiftId,
            'is_saved'            => $this->isSaved,
            'can_be_transferred'  => $this->canBeTransferred,
            'transfer_star_count' => $this->transferStarCount,
            'next_transfer_date'  => $this->nextTransferDate,
            'next_resale_date'    => $this->nextResaleDate,
            'export_date'         => $this->exportDate,
        ];
    }
}
