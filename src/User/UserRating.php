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
    public const string TYPE_NAME = 'userRating';

    public function __construct(
        /**
         * The rating required for the current level.
         */
        protected int  $currentLevelRating,
        /**
         * True, if the maximum level is reached.
         */
        protected bool $isMaximumLevelReached,
        /**
         * The level of the user; may be negative.
         */
        protected int  $level,
        /**
         * The rating required for the next level; 0 if the maximum level is reached.
         */
        protected int  $nextLevelRating,
        /**
         * Numerical value of the rating.
         */
        protected int  $rating,
    ) {}

    public static function fromArray(array $array): UserRating
    {
        return new static(
            currentLevelRating   : $array['current_level_rating'],
            isMaximumLevelReached: $array['is_maximum_level_reached'],
            level                : $array['level'],
            nextLevelRating      : $array['next_level_rating'],
            rating               : $array['rating'],
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

    public function setCurrentLevelRating(int $value): static
    {
        $this->currentLevelRating = $value;

        return $this;
    }

    public function setIsMaximumLevelReached(bool $value): static
    {
        $this->isMaximumLevelReached = $value;

        return $this;
    }

    public function setLevel(int $value): static
    {
        $this->level = $value;

        return $this;
    }

    public function setNextLevelRating(int $value): static
    {
        $this->nextLevelRating = $value;

        return $this;
    }

    public function setRating(int $value): static
    {
        $this->rating = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'current_level_rating'     => $this->currentLevelRating,
            'is_maximum_level_reached' => $this->isMaximumLevelReached,
            'level'                    => $this->level,
            'next_level_rating'        => $this->nextLevelRating,
            'rating'                   => $this->rating,
        ];
    }
}
