<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A giveaway without public winners has been completed for the chat.
 */
class MessageGiveawayCompleted extends MessageContent
{
    public const string TYPE_NAME = 'messageGiveawayCompleted';

    public function __construct(
        /**
         * Identifier of the message with the giveaway; can be 0 if the message was deleted.
         */
        protected int  $giveawayMessageId,
        /**
         * True, if the giveaway is a Telegram Star giveaway.
         */
        protected bool $isStarGiveaway,
        /**
         * Number of undistributed prizes; for Telegram Premium giveaways only.
         */
        protected int  $unclaimedPrizeCount,
        /**
         * Number of winners in the giveaway.
         */
        protected int  $winnerCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayCompleted
    {
        return new static(
            giveawayMessageId  : $array['giveaway_message_id'],
            isStarGiveaway     : $array['is_star_giveaway'],
            unclaimedPrizeCount: $array['unclaimed_prize_count'],
            winnerCount        : $array['winner_count'],
        );
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function getIsStarGiveaway(): bool
    {
        return $this->isStarGiveaway;
    }

    public function getUnclaimedPrizeCount(): int
    {
        return $this->unclaimedPrizeCount;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function setIsStarGiveaway(bool $value): static
    {
        $this->isStarGiveaway = $value;

        return $this;
    }

    public function setUnclaimedPrizeCount(int $value): static
    {
        $this->unclaimedPrizeCount = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'giveaway_message_id'   => $this->giveawayMessageId,
            'is_star_giveaway'      => $this->isStarGiveaway,
            'unclaimed_prize_count' => $this->unclaimedPrizeCount,
            'winner_count'          => $this->winnerCount,
        ];
    }
}
