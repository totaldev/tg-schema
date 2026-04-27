<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Game;

use Totaldev\TgSchema\TdObject;

/**
 * Contains one row of the game high score table.
 */
class GameHighScore extends TdObject
{
    public const string TYPE_NAME = 'gameHighScore';

    public function __construct(
        /**
         * Position in the high score table.
         */
        protected int $position,
        /**
         * User score.
         */
        protected int $score,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): GameHighScore
    {
        return new static(
            position: $array['position'],
            score   : $array['score'],
            userId  : $array['user_id'],
        );
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setPosition(int $value): static
    {
        $this->position = $value;

        return $this;
    }

    public function setScore(int $value): static
    {
        $this->score = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
            'score'    => $this->score,
            'user_id'  => $this->userId,
        ];
    }
}
