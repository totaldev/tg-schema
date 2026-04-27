<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Gift;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a gift that was acquired by the current user on an auction.
 */
class GiftAuctionAcquiredGift extends TdObject
{
    public const string TYPE_NAME = 'giftAuctionAcquiredGift';

    public function __construct(
        /**
         * Identifier of the auction round in which the gift was acquired.
         */
        protected int           $auctionRoundNumber,
        /**
         * Position of the user in the round among all auction participants.
         */
        protected int           $auctionRoundPosition,
        /**
         * Point in time (Unix timestamp) when the gift was acquired.
         */
        protected int           $date,
        /**
         * True, if the sender and gift text are shown only to the gift receiver; otherwise, everyone will be able to see them.
         */
        protected bool          $isPrivate,
        /**
         * Receiver of the gift.
         */
        protected MessageSender $receiverId,
        /**
         * The number of Telegram Stars that were paid for the gift.
         */
        protected int           $starCount,
        /**
         * Message added to the gift.
         */
        protected FormattedText $text,
        /**
         * Unique number of the gift among gifts upgraded from the same gift after upgrade; 0 if yet unassigned.
         */
        protected int           $uniqueGiftNumber,
    ) {}

    public static function fromArray(array $array): GiftAuctionAcquiredGift
    {
        return new static(
            auctionRoundNumber  : $array['auction_round_number'],
            auctionRoundPosition: $array['auction_round_position'],
            date                : $array['date'],
            isPrivate           : $array['is_private'],
            receiverId          : TdSchemaRegistry::fromArray($array['receiver_id']),
            starCount           : $array['star_count'],
            text                : TdSchemaRegistry::fromArray($array['text']),
            uniqueGiftNumber    : $array['unique_gift_number'],
        );
    }

    public function getAuctionRoundNumber(): int
    {
        return $this->auctionRoundNumber;
    }

    public function getAuctionRoundPosition(): int
    {
        return $this->auctionRoundPosition;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    public function getReceiverId(): MessageSender
    {
        return $this->receiverId;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getUniqueGiftNumber(): int
    {
        return $this->uniqueGiftNumber;
    }

    public function setAuctionRoundNumber(int $value): static
    {
        $this->auctionRoundNumber = $value;

        return $this;
    }

    public function setAuctionRoundPosition(int $value): static
    {
        $this->auctionRoundPosition = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setIsPrivate(bool $value): static
    {
        $this->isPrivate = $value;

        return $this;
    }

    public function setReceiverId(MessageSender $value): static
    {
        $this->receiverId = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setUniqueGiftNumber(int $value): static
    {
        $this->uniqueGiftNumber = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'auction_round_number'   => $this->auctionRoundNumber,
            'auction_round_position' => $this->auctionRoundPosition,
            'date'                   => $this->date,
            'is_private'             => $this->isPrivate,
            'receiver_id'            => $this->receiverId->jsonSerialize(),
            'star_count'             => $this->starCount,
            'text'                   => $this->text->jsonSerialize(),
            'unique_gift_number'     => $this->uniqueGiftNumber,
        ];
    }
}
