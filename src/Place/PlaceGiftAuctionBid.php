<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Place;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Places a bid on an auction gift.
 */
class PlaceGiftAuctionBid extends TdFunction
{
    public const string TYPE_NAME = 'placeGiftAuctionBid';

    public function __construct(
        /**
         * Identifier of the gift to place the bid on.
         */
        protected int           $giftId,
        /**
         * Pass true to show gift text and sender only to the gift receiver; otherwise, everyone will be able to see them.
         */
        protected bool          $isPrivate,
        /**
         * The number of Telegram Stars to place in the bid.
         */
        protected int           $starCount,
        /**
         * Text to show along with the gift; 0-getOption("gift_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities are allowed. Must be empty if the receiver enabled paid messages.
         */
        protected FormattedText $text,
        /**
         * Identifier of the user who will receive the gift.
         */
        protected int           $userId,
    ) {}

    public static function fromArray(array $array): PlaceGiftAuctionBid
    {
        return new static(
            giftId   : $array['gift_id'],
            isPrivate: $array['is_private'],
            starCount: $array['star_count'],
            text     : TdSchemaRegistry::fromArray($array['text']),
            userId   : $array['user_id'],
        );
    }

    public function getGiftId(): int
    {
        return $this->giftId;
    }

    public function getIsPrivate(): bool
    {
        return $this->isPrivate;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setGiftId(int $value): static
    {
        $this->giftId = $value;

        return $this;
    }

    public function setIsPrivate(bool $value): static
    {
        $this->isPrivate = $value;

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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'gift_id'    => $this->giftId,
            'is_private' => $this->isPrivate,
            'star_count' => $this->starCount,
            'text'       => $this->text->jsonSerialize(),
            'user_id'    => $this->userId,
        ];
    }
}
