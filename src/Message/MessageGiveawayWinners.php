<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Giveaway\GiveawayPrize;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A giveaway with public winners has been completed for the chat.
 */
class MessageGiveawayWinners extends MessageContent
{
    public const TYPE_NAME = 'messageGiveawayWinners';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway.
         */
        protected int           $boostedChatId,
        /**
         * Identifier of the message with the giveaway in the boosted chat.
         */
        protected int           $giveawayMessageId,
        /**
         * Number of other chats that participated in the giveaway.
         */
        protected int           $additionalChatCount,
        /**
         * Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway.
         */
        protected int           $actualWinnersSelectionDate,
        /**
         * True, if only new members of the chats were eligible for the giveaway.
         */
        protected bool          $onlyNewMembers,
        /**
         * True, if the giveaway was canceled and was fully refunded.
         */
        protected bool          $wasRefunded,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize $prize,
        /**
         * Additional description of the giveaway prize.
         */
        protected string        $prizeDescription,
        /**
         * Total number of winners in the giveaway.
         */
        protected int           $winnerCount,
        /**
         * Up to 100 user identifiers of the winners of the giveaway.
         *
         * @var int[]
         */
        protected array         $winnerUserIds,
        /**
         * Number of undistributed prizes; for Telegram Premium giveaways only.
         */
        protected int           $unclaimedPrizeCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayWinners
    {
        return new static(
            $array['boosted_chat_id'],
            $array['giveaway_message_id'],
            $array['additional_chat_count'],
            $array['actual_winners_selection_date'],
            $array['only_new_members'],
            $array['was_refunded'],
            TdSchemaRegistry::fromArray($array['prize']),
            $array['prize_description'],
            $array['winner_count'],
            $array['winner_user_ids'],
            $array['unclaimed_prize_count'],
        );
    }

    public function getActualWinnersSelectionDate(): int
    {
        return $this->actualWinnersSelectionDate;
    }

    public function getAdditionalChatCount(): int
    {
        return $this->additionalChatCount;
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function getGiveawayMessageId(): int
    {
        return $this->giveawayMessageId;
    }

    public function getOnlyNewMembers(): bool
    {
        return $this->onlyNewMembers;
    }

    public function getPrize(): GiveawayPrize
    {
        return $this->prize;
    }

    public function getPrizeDescription(): string
    {
        return $this->prizeDescription;
    }

    public function getUnclaimedPrizeCount(): int
    {
        return $this->unclaimedPrizeCount;
    }

    public function getWasRefunded(): bool
    {
        return $this->wasRefunded;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function getWinnerUserIds(): array
    {
        return $this->winnerUserIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'boosted_chat_id'               => $this->boostedChatId,
            'giveaway_message_id'           => $this->giveawayMessageId,
            'additional_chat_count'         => $this->additionalChatCount,
            'actual_winners_selection_date' => $this->actualWinnersSelectionDate,
            'only_new_members'              => $this->onlyNewMembers,
            'was_refunded'                  => $this->wasRefunded,
            'prize'                         => $this->prize->typeSerialize(),
            'prize_description'             => $this->prizeDescription,
            'winner_count'                  => $this->winnerCount,
            'winner_user_ids'               => $this->winnerUserIds,
            'unclaimed_prize_count'         => $this->unclaimedPrizeCount,
        ];
    }
}
