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
    public const TYPE_NAME = 'messageGiveawayCompleted';

    public function __construct(
        /**
         * Identifier of the message with the giveaway; can be 0 if the message was deleted.
         */
        protected int  $giveawayMessageId,
        /**
         * Number of winners in the giveaway.
         */
        protected int  $winnerCount,
        /**
         * True, if the giveaway is a Telegram Star giveaway.
         */
        protected bool $isStarGiveaway,
        /**
         * Number of undistributed prizes; for Telegram Premium giveaways only.
         */
        protected int  $unclaimedPrizeCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayCompleted
    {
        return new static(
            $array['giveaway_message_id'],
            $array['winner_count'],
            $array['is_star_giveaway'],
            $array['unclaimed_prize_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'giveaway_message_id'   => $this->giveawayMessageId,
            'winner_count'          => $this->winnerCount,
            'is_star_giveaway'      => $this->isStarGiveaway,
            'unclaimed_prize_count' => $this->unclaimedPrizeCount,
        ];
    }
}
