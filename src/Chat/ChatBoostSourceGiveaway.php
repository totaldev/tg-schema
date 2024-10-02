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
    public const TYPE_NAME = 'chatBoostSourceGiveaway';

    public function __construct(
        /**
         * Identifier of a user that won in the giveaway; 0 if none.
         */
        protected int    $userId,
        /**
         * The created Telegram Premium gift code if it was used by the user or can be claimed by the current user; an empty string otherwise; for Telegram Premium giveways only.
         */
        protected string $giftCode,
        /**
         * Number of Telegram Stars distributed among winners of the giveaway.
         */
        protected int    $starCount,
        /**
         * Identifier of the corresponding giveaway message; can be an identifier of a deleted message.
         */
        protected int    $giveawayMessageId,
        /**
         * True, if the winner for the corresponding giveaway prize wasn't chosen, because there were not enough participants.
         */
        protected bool   $isUnclaimed,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatBoostSourceGiveaway
    {
        return new static(
            $array['user_id'],
            $array['gift_code'],
            $array['star_count'],
            $array['giveaway_message_id'],
            $array['is_unclaimed'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'user_id'             => $this->userId,
            'gift_code'           => $this->giftCode,
            'star_count'          => $this->starCount,
            'giveaway_message_id' => $this->giveawayMessageId,
            'is_unclaimed'        => $this->isUnclaimed,
        ];
    }
}
