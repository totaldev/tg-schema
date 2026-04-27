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
    public const string TYPE_NAME = 'messageGiveawayWinners';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the winners were selected. May be bigger than winners selection date specified in parameters of the giveaway.
         */
        protected int           $actualWinnersSelectionDate,
        /**
         * Number of other chats that participated in the giveaway.
         */
        protected int           $additionalChatCount,
        /**
         * Identifier of the supergroup or channel chat, which was automatically boosted by the winners of the giveaway.
         */
        protected int           $boostedChatId,
        /**
         * Identifier of the message with the giveaway in the boosted chat.
         */
        protected int           $giveawayMessageId,
        /**
         * True, if only new members of the chats were eligible for the giveaway.
         */
        protected bool          $onlyNewMembers,
        /**
         * Prize of the giveaway.
         */
        protected GiveawayPrize $prize,
        /**
         * Additional description of the giveaway prize.
         */
        protected string        $prizeDescription,
        /**
         * Number of undistributed prizes; for Telegram Premium giveaways only.
         */
        protected int           $unclaimedPrizeCount,
        /**
         * True, if the giveaway was canceled and was fully refunded.
         */
        protected bool          $wasRefunded,
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
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiveawayWinners
    {
        return new static(
            actualWinnersSelectionDate: $array['actual_winners_selection_date'],
            additionalChatCount       : $array['additional_chat_count'],
            boostedChatId             : $array['boosted_chat_id'],
            giveawayMessageId         : $array['giveaway_message_id'],
            onlyNewMembers            : $array['only_new_members'],
            prize                     : TdSchemaRegistry::fromArray($array['prize']),
            prizeDescription          : $array['prize_description'],
            unclaimedPrizeCount       : $array['unclaimed_prize_count'],
            wasRefunded               : $array['was_refunded'],
            winnerCount               : $array['winner_count'],
            winnerUserIds             : $array['winner_user_ids'],
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

    public function setActualWinnersSelectionDate(int $value): static
    {
        $this->actualWinnersSelectionDate = $value;

        return $this;
    }

    public function setAdditionalChatCount(int $value): static
    {
        $this->additionalChatCount = $value;

        return $this;
    }

    public function setBoostedChatId(int $value): static
    {
        $this->boostedChatId = $value;

        return $this;
    }

    public function setGiveawayMessageId(int $value): static
    {
        $this->giveawayMessageId = $value;

        return $this;
    }

    public function setOnlyNewMembers(bool $value): static
    {
        $this->onlyNewMembers = $value;

        return $this;
    }

    public function setPrize(GiveawayPrize $value): static
    {
        $this->prize = $value;

        return $this;
    }

    public function setPrizeDescription(string $value): static
    {
        $this->prizeDescription = $value;

        return $this;
    }

    public function setUnclaimedPrizeCount(int $value): static
    {
        $this->unclaimedPrizeCount = $value;

        return $this;
    }

    public function setWasRefunded(bool $value): static
    {
        $this->wasRefunded = $value;

        return $this;
    }

    public function setWinnerCount(int $value): static
    {
        $this->winnerCount = $value;

        return $this;
    }

    public function setWinnerUserIds(array $value): static
    {
        $this->winnerUserIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'actual_winners_selection_date' => $this->actualWinnersSelectionDate,
            'additional_chat_count'         => $this->additionalChatCount,
            'boosted_chat_id'               => $this->boostedChatId,
            'giveaway_message_id'           => $this->giveawayMessageId,
            'only_new_members'              => $this->onlyNewMembers,
            'prize'                         => $this->prize->jsonSerialize(),
            'prize_description'             => $this->prizeDescription,
            'unclaimed_prize_count'         => $this->unclaimedPrizeCount,
            'was_refunded'                  => $this->wasRefunded,
            'winner_count'                  => $this->winnerCount,
            'winner_user_ids'               => $this->winnerUserIds,
        ];
    }
}
