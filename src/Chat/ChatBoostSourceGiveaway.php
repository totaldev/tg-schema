<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The chat created a giveaway.
 */
class ChatBoostSourceGiveaway extends ChatBoostSource
{
    public const string TYPE_NAME = 'chatBoostSourceGiveaway';

    public function __construct(
        /**
         * The created Telegram Premium gift code if it was used by the user or can be claimed by the current user; an empty string otherwise; for Telegram Premium giveways only.
         */
        protected string $giftCode,
        /**
         * Identifier of the corresponding giveaway message; can be an identifier of a deleted message.
         */
        protected int    $giveawayMessageId,
        /**
         * True, if the winner for the corresponding giveaway prize wasn't chosen, because there were not enough participants.
         */
        protected bool   $isUnclaimed,
        /**
         * Number of Telegram Stars distributed among winners of the giveaway.
         */
        protected int    $starCount,
        /**
         * Identifier of a user who won in the giveaway; 0 if none.
         */
        protected int    $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatBoostSourceGiveaway
    {
        return new static(
            giftCode         : $array['gift_code'],
            giveawayMessageId: $array['giveaway_message_id'],
            isUnclaimed      : $array['is_unclaimed'],
            starCount        : $array['star_count'],
            userId           : $array['user_id'],
        );
    }

    public function getGiftCode(): string
    {
        return $this->giftCode;
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function getIsUnclaimed(): bool
    {
        return $this->isUnclaimed;
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setGiftCode(string $value): static
    {
        $this->giftCode = $value;

        return $this;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function setIsUnclaimed(bool $value): static
    {
        $this->isUnclaimed = $value;

        return $this;
    }

    public function setStarCount(int $value): static
    {
        $this->starCount = $value;

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
            '@type'               => static::TYPE_NAME,
            'gift_code'           => $this->giftCode,
            'giveaway_message_id' => $this->giveawayMessageId,
            'is_unclaimed'        => $this->isUnclaimed,
            'star_count'          => $this->starCount,
            'user_id'             => $this->userId,
        ];
    }
}
