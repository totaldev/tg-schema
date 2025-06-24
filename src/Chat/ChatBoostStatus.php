<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Prepaid\PrepaidGiveaway;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes current boost status of a chat.
 */
class ChatBoostStatus extends TdObject
{
    public const TYPE_NAME = 'chatBoostStatus';

    public function __construct(
        /**
         * An HTTP URL, which can be used to boost the chat.
         */
        protected string $boostUrl,
        /**
         * Identifiers of boost slots of the current user applied to the chat.
         *
         * @var int[]
         */
        protected array  $appliedSlotIds,
        /**
         * Current boost level of the chat.
         */
        protected int    $level,
        /**
         * The number of boosts received by the chat from created Telegram Premium gift codes and giveaways; always 0 if the current user isn't an administrator in the chat.
         */
        protected int    $giftCodeBoostCount,
        /**
         * The number of boosts received by the chat.
         */
        protected int    $boostCount,
        /**
         * The number of boosts added to reach the current level.
         */
        protected int    $currentLevelBoostCount,
        /**
         * The number of boosts needed to reach the next level; 0 if the next level isn't available.
         */
        protected int    $nextLevelBoostCount,
        /**
         * Approximate number of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat.
         */
        protected int    $premiumMemberCount,
        /**
         * A percentage of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat.
         */
        protected float  $premiumMemberPercentage,
        /**
         * The list of prepaid giveaways available for the chat; only for chat administrators.
         *
         * @var PrepaidGiveaway[]
         */
        protected array  $prepaidGiveaways,
    ) {}

    public static function fromArray(array $array): ChatBoostStatus
    {
        return new static(
            $array['boost_url'],
            $array['applied_slot_ids'],
            $array['level'],
            $array['gift_code_boost_count'],
            $array['boost_count'],
            $array['current_level_boost_count'],
            $array['next_level_boost_count'],
            $array['premium_member_count'],
            $array['premium_member_percentage'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['prepaid_giveaways']),
        );
    }

    public function getAppliedSlotIds(): array
    {
        return $this->appliedSlotIds;
    }

    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    public function getBoostUrl(): string
    {
        return $this->boostUrl;
    }

    public function getCurrentLevelBoostCount(): int
    {
        return $this->currentLevelBoostCount;
    }

    public function getGiftCodeBoostCount(): int
    {
        return $this->giftCodeBoostCount;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getNextLevelBoostCount(): int
    {
        return $this->nextLevelBoostCount;
    }

    public function getPremiumMemberCount(): int
    {
        return $this->premiumMemberCount;
    }

    public function getPremiumMemberPercentage(): float
    {
        return $this->premiumMemberPercentage;
    }

    public function getPrepaidGiveaways(): array
    {
        return $this->prepaidGiveaways;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'boost_url'                 => $this->boostUrl,
            'applied_slot_ids'          => $this->appliedSlotIds,
            'level'                     => $this->level,
            'gift_code_boost_count'     => $this->giftCodeBoostCount,
            'boost_count'               => $this->boostCount,
            'current_level_boost_count' => $this->currentLevelBoostCount,
            'next_level_boost_count'    => $this->nextLevelBoostCount,
            'premium_member_count'      => $this->premiumMemberCount,
            'premium_member_percentage' => $this->premiumMemberPercentage,
            array_map(static fn($x) => $x->typeSerialize(), $this->prepaidGiveaways),
        ];
    }
}
