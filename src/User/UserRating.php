<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;

/**
 * Contains description of user rating.
 */
class UserRating extends TdObject
{
    public const TYPE_NAME = 'userRating';

    public function __construct(
        /**
         * The level of the user; may be negative.
         */
        protected int  $level,
        /**
         * True, if the maximum level is reached.
         */
        protected bool $isMaximumLevelReached,
        /**
         * Numerical value of the rating.
         */
        protected int  $rating,
        /**
         * The rating required for the current level.
         */
        protected int  $currentLevelRating,
        /**
         * The rating required for the next level; 0 if the maximum level is reached.
         */
        protected int  $nextLevelRating,
    ) {}

    public static function fromArray(array $array): UserRating
    {
        return new static(
            $array['level'],
            $array['is_maximum_level_reached'],
            $array['rating'],
            $array['current_level_rating'],
            $array['next_level_rating'],
        );
    }

    public function getCurrentLevelRating(): int
    {
        return $this->currentLevelRating;
    }

    public function getIsMaximumLevelReached(): bool
    {
        return $this->isMaximumLevelReached;
    }

    public function getLevel(): int
    {
        return $this->level;
    }

    public function getNextLevelRating(): int
    {
        return $this->nextLevelRating;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'level'                    => $this->level,
            'is_maximum_level_reached' => $this->isMaximumLevelReached,
            'rating'                   => $this->rating,
            'current_level_rating'     => $this->currentLevelRating,
            'next_level_rating'        => $this->nextLevelRating,
        ];
    }
}
