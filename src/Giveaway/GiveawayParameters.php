<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

use Totaldev\TgSchema\TdObject;

/**
 * Describes parameters of a giveaway.
 */
class GiveawayParameters extends TdObject
{
    public const TYPE_NAME = 'giveawayParameters';

    public function __construct(
        /**
         * Identifier of the supergroup or channel chat, which will be automatically boosted by the winners of the giveaway for duration of the Telegram Premium subscription, or for the specified time. If the chat is a channel, then can_post_messages right is required in the channel, otherwise, the user must be an administrator in the supergroup.
         */
        protected int    $boostedChatId,
        /**
         * Identifiers of other supergroup or channel chats that must be subscribed by the users to be eligible for the giveaway. There can be up to getOption("giveaway_additional_chat_count_max") additional chats.
         *
         * @var int[]
         */
        protected array  $additionalChatIds,
        /**
         * Point in time (Unix timestamp) when the giveaway is expected to be performed; must be 60-getOption("giveaway_duration_max") seconds in the future in scheduled giveaways.
         */
        protected int    $winnersSelectionDate,
        /**
         * True, if only new members of the chats will be eligible for the giveaway.
         */
        protected bool   $onlyNewMembers,
        /**
         * True, if the list of winners of the giveaway will be available to everyone.
         */
        protected bool   $hasPublicWinners,
        /**
         * The list of two-letter ISO 3166-1 alpha-2 codes of countries, users from which will be eligible for the giveaway. If empty, then all users can participate in the giveaway. There can be up to getOption("giveaway_country_count_max") chosen countries. Users with phone number that was bought at https://fragment.com can participate in any giveaway and the country code "FT" must not be specified in the list.
         *
         * @var string[]
         */
        protected array  $countryCodes,
        /**
         * Additional description of the giveaway prize; 0-128 characters.
         */
        protected string $prizeDescription,
    ) {}

    public static function fromArray(array $array): GiveawayParameters
    {
        return new static(
            $array['boosted_chat_id'],
            $array['additional_chat_ids'],
            $array['winners_selection_date'],
            $array['only_new_members'],
            $array['has_public_winners'],
            $array['country_codes'],
            $array['prize_description'],
        );
    }

    public function getAdditionalChatIds(): array
    {
        return $this->additionalChatIds;
    }

    public function getBoostedChatId(): int
    {
        return $this->boostedChatId;
    }

    public function getCountryCodes(): array
    {
        return $this->countryCodes;
    }

    public function getHasPublicWinners(): bool
    {
        return $this->hasPublicWinners;
    }

    public function getOnlyNewMembers(): bool
    {
        return $this->onlyNewMembers;
    }

    public function getPrizeDescription(): string
    {
        return $this->prizeDescription;
    }

    public function getWinnersSelectionDate(): int
    {
        return $this->winnersSelectionDate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'boosted_chat_id'        => $this->boostedChatId,
            'additional_chat_ids'    => $this->additionalChatIds,
            'winners_selection_date' => $this->winnersSelectionDate,
            'only_new_members'       => $this->onlyNewMembers,
            'has_public_winners'     => $this->hasPublicWinners,
            'country_codes'          => $this->countryCodes,
            'prize_description'      => $this->prizeDescription,
        ];
    }
}
