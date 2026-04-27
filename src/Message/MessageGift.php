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
    public const string TYPE_NAME = 'messageGift';

    public function __construct(
        /**
         * True, if the gift can be upgraded to a unique gift; only for the receiver of the gift.
         */
        protected bool           $canBeUpgraded,
        /**
         * The gift.
         */
        protected Gift           $gift,
        /**
         * True, if the message is about prepaid upgrade of the gift by another user.
         */
        protected bool           $isPrepaidUpgrade,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them.
         */
        protected bool           $isPrivate,
        /**
         * True, if the gift is displayed on the user's or the channel's profile page; only for the receiver of the gift.
         */
        protected bool           $isSaved,
        /**
         * True, if the upgrade was bought after the gift was sent. In this case, prepaid upgrade cost must not be added to the gift cost.
         */
        protected bool           $isUpgradeSeparate,
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
         * Receiver of the gift.
         */
        protected MessageSender  $receiverId,
        /**
         * Number of Telegram Stars that can be claimed by the receiver instead of the regular gift; 0 if the gift can't be sold by the receiver.
         */
        protected int            $sellStarCount,
        /**
         * Sender of the gift; may be null for outgoing messages about prepaid upgrade of gifts from unknown users.
         */
        protected ?MessageSender $senderId,
        /**
         * Message added to the gift.
         */
        protected FormattedText  $text,
        /**
         * Identifier of the corresponding upgraded gift; may be empty if unknown. Use getReceivedGift to get information about the gift.
         */
        protected string         $upgradedReceivedGiftId,
        /**
         * True, if the gift was converted to Telegram Stars; only for the receiver of the gift.
         */
        protected bool           $wasConverted,
        /**
         * True, if the gift was refunded and isn't available anymore.
         */
        protected bool           $wasRefunded,
        /**
         * True, if the gift was upgraded to a unique gift.
         */
        protected bool           $wasUpgraded,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGift
    {
        return new static(
            canBeUpgraded          : $array['can_be_upgraded'],
            gift                   : TdSchemaRegistry::fromArray($array['gift']),
            isPrepaidUpgrade       : $array['is_prepaid_upgrade'],
            isPrivate              : $array['is_private'],
            isSaved                : $array['is_saved'],
            isUpgradeSeparate      : $array['is_upgrade_separate'],
            prepaidUpgradeHash     : $array['prepaid_upgrade_hash'],
            prepaidUpgradeStarCount: $array['prepaid_upgrade_star_count'],
            receivedGiftId         : $array['received_gift_id'],
            receiverId             : TdSchemaRegistry::fromArray($array['receiver_id']),
            sellStarCount          : $array['sell_star_count'],
            senderId               : (isset($array['sender_id']) ? TdSchemaRegistry::fromArray($array['sender_id']) : null),
            text                   : TdSchemaRegistry::fromArray($array['text']),
            upgradedReceivedGiftId : $array['upgraded_received_gift_id'],
            wasConverted           : $array['was_converted'],
            wasRefunded            : $array['was_refunded'],
            wasUpgraded            : $array['was_upgraded'],
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

    public function setCanBeUpgraded(bool $value): static
    {
        $this->canBeUpgraded = $value;

        return $this;
    }

    public function setGift(Gift $value): static
    {
        $this->gift = $value;

        return $this;
    }

    public function setIsPrepaidUpgrade(bool $value): static
    {
        $this->isPrepaidUpgrade = $value;

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

    public function setReceiverId(MessageSender $value): static
    {
        $this->receiverId = $value;

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

    public function setUpgradedReceivedGiftId(string $value): static
    {
        $this->upgradedReceivedGiftId = $value;

        return $this;
    }

    public function setWasConverted(bool $value): static
    {
        $this->wasConverted = $value;

        return $this;
    }

    public function setWasRefunded(bool $value): static
    {
        $this->wasRefunded = $value;

        return $this;
    }

    public function setWasUpgraded(bool $value): static
    {
        $this->wasUpgraded = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'can_be_upgraded'            => $this->canBeUpgraded,
            'gift'                       => $this->gift->jsonSerialize(),
            'is_prepaid_upgrade'         => $this->isPrepaidUpgrade,
            'is_private'                 => $this->isPrivate,
            'is_saved'                   => $this->isSaved,
            'is_upgrade_separate'        => $this->isUpgradeSeparate,
            'prepaid_upgrade_hash'       => $this->prepaidUpgradeHash,
            'prepaid_upgrade_star_count' => $this->prepaidUpgradeStarCount,
            'received_gift_id'           => $this->receivedGiftId,
            'receiver_id'                => $this->receiverId->jsonSerialize(),
            'sell_star_count'            => $this->sellStarCount,
            'sender_id'                  => (null !== $this->senderId ? $this->senderId->jsonSerialize() : null),
            'text'                       => $this->text->jsonSerialize(),
            'upgraded_received_gift_id'  => $this->upgradedReceivedGiftId,
            'was_converted'              => $this->wasConverted,
            'was_refunded'               => $this->wasRefunded,
            'was_upgraded'               => $this->wasUpgraded,
        ];
    }
}
