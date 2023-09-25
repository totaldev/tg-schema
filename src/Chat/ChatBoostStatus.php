<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes current boost status of a chat
 */
class ChatBoostStatus extends TdObject
{
    public const TYPE_NAME = 'chatBoostStatus';

    /**
     * The number of times the chat was boosted
     *
     * @var int
     */
    protected int $boostCount;

    /**
     * The number of boosts added to reach the current level
     *
     * @var int
     */
    protected int $currentLevelBoostCount;

    /**
     * True, if the current user has already boosted the chat
     *
     * @var bool
     */
    protected bool $isBoosted;

    /**
     * Current boost level of the chat
     *
     * @var int
     */
    protected int $level;

    /**
     * The number of boosts needed to reach the next level; 0 if the next level isn't available
     *
     * @var int
     */
    protected int $nextLevelBoostCount;

    /**
     * Approximate number of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     *
     * @var int
     */
    protected int $premiumMemberCount;

    /**
     * A percentage of Telegram Premium subscribers joined the chat; always 0 if the current user isn't an administrator in the chat
     *
     * @var float
     */
    protected float $premiumMemberPercentage;

    public function __construct(
        bool  $isBoosted,
        int   $level,
        int   $boostCount,
        int   $currentLevelBoostCount,
        int   $nextLevelBoostCount,
        int   $premiumMemberCount,
        float $premiumMemberPercentage,
    )
    {
        $this->isBoosted = $isBoosted;
        $this->level = $level;
        $this->boostCount = $boostCount;
        $this->currentLevelBoostCount = $currentLevelBoostCount;
        $this->nextLevelBoostCount = $nextLevelBoostCount;
        $this->premiumMemberCount = $premiumMemberCount;
        $this->premiumMemberPercentage = $premiumMemberPercentage;
    }

    public static function fromArray(array $array): ChatBoostStatus
    {
        return new static(
            $array['is_boosted'],
            $array['level'],
            $array['boost_count'],
            $array['current_level_boost_count'],
            $array['next_level_boost_count'],
            $array['premium_member_count'],
            $array['premium_member_percentage'],
        );
    }

    public function getBoostCount(): int
    {
        return $this->boostCount;
    }

    public function getCurrentLevelBoostCount(): int
    {
        return $this->currentLevelBoostCount;
    }

    public function getIsBoosted(): bool
    {
        return $this->isBoosted;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'is_boosted' => $this->isBoosted,
            'level' => $this->level,
            'boost_count' => $this->boostCount,
            'current_level_boost_count' => $this->currentLevelBoostCount,
            'next_level_boost_count' => $this->nextLevelBoostCount,
            'premium_member_count' => $this->premiumMemberCount,
            'premium_member_percentage' => $this->premiumMemberPercentage,
        ];
    }
}
