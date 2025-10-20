<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Gift\Gift;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A regular gift was received or sent by the current user, or the current user was notified about a channel gift.
 */
class MessageGift extends MessageContent
{
    public const TYPE_NAME = 'messageGift';

    public function __construct(
        /**
         * The gift.
         */
        protected Gift           $gift,
        /**
         * Sender of the gift; may be null for outgoing messages about prepaid upgrade of gifts from unknown users.
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
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the receiver.
         */
        protected int            $sellStarCount,
        /**
         * Number of Telegram Stars that were paid by the sender for the ability to upgrade the gift.
         */
        protected int            $prepaidUpgradeStarCount,
        /**
         * True, if the upgrade was bought after the gift was sent. In this case, prepaid upgrade cost must not be added to the gift cost.
         */
        protected bool           $isUpgradeSeparate,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them.
         */
        protected bool           $isPrivate,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift.
         */
        protected bool           $isSaved,
        /**
         * True, if the message is about prepaid upgrade of the gift by another user.
         */
        protected bool           $isPrepaidUpgrade,
        /**
         * True, if the gift can be upgraded to a unique gift; only for the receiver of the gift.
         */
        protected bool           $canBeUpgraded,
        /**
         * True, if the gift was converted to Telegram Stars; only for the receiver of the gift.
         */
        protected bool           $wasConverted,
        /**
         * True, if the gift was upgraded to a unique gift.
         */
        protected bool           $wasUpgraded,
        /**
         * True, if the gift was refunded and isn't available anymore.
         */
        protected bool           $wasRefunded,
        /**
         * Identifier of the corresponding upgraded gift; may be empty if unknown. Use getReceivedGift to get information about the gift.
         */
        protected string         $upgradedReceivedGiftId,
        /**
         * If non-empty, then the user can pay for an upgrade of the gift using buyGiftUpgrade.
         */
        protected string         $prepaidUpgradeHash,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGift
    {
        return new static(
            TdSchemaRegistry::fromArray($array['gift']),
            isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null,
            TdSchemaRegistry::fromArray($array['receiver_id']),
            $array['received_gift_id'],
            TdSchemaRegistry::fromArray($array['text']),
            $array['sell_star_count'],
            $array['prepaid_upgrade_star_count'],
            $array['is_upgrade_separate'],
            $array['is_private'],
            $array['is_saved'],
            $array['is_prepaid_upgrade'],
            $array['can_be_upgraded'],
            $array['was_converted'],
            $array['was_upgraded'],
            $array['was_refunded'],
            $array['upgraded_received_gift_id'],
            $array['prepaid_upgrade_hash'],
        );
    }

    public function getCanBeUpgraded(): bool
    {
        return $this->canBeUpgraded;
    }

    public function getGift(): Gift
    {
        return $this->gift;
    }

    public function getIsPrepaidUpgrade(): bool
    {
        return $this->isPrepaidUpgrade;
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

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
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

    public function getUpgradedReceivedGiftId(): string
    {
        return $this->upgradedReceivedGiftId;
    }

    public function getWasConverted(): bool
    {
        return $this->wasConverted;
    }

    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
    }

    public function getWasUpgraded(): bool
    {
        return $this->wasUpgraded;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'gift'                       => $this->gift->typeSerialize(),
            'sender_id'                  => $this->senderId ?? null,
            'receiver_id'                => $this->receiverId->typeSerialize(),
            'received_gift_id'           => $this->receivedGiftId,
            'text'                       => $this->text->typeSerialize(),
            'sell_star_count'            => $this->sellStarCount,
            'prepaid_upgrade_star_count' => $this->prepaidUpgradeStarCount,
            'is_upgrade_separate'        => $this->isUpgradeSeparate,
            'is_private'                 => $this->isPrivate,
            'is_saved'                   => $this->isSaved,
            'is_prepaid_upgrade'         => $this->isPrepaidUpgrade,
            'can_be_upgraded'            => $this->canBeUpgraded,
            'was_converted'              => $this->wasConverted,
            'was_upgraded'               => $this->wasUpgraded,
            'was_refunded'               => $this->wasRefunded,
            'upgraded_received_gift_id'  => $this->upgradedReceivedGiftId,
            'prepaid_upgrade_hash'       => $this->prepaidUpgradeHash,
        ];
    }
}
