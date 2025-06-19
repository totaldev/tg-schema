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
    public const TYPE_NAME = 'gameHighScore';

    public function __construct(
        /**
         * Position in the high score table.
         */
        protected int $position,
        /**
         * User identifier.
         */
        protected int $userId,
        /**
         * User score.
         */
        protected int $score
    ) {}

    public static function fromArray(array $array): GameHighScore
    {
        return new static(
            $array['position'],
            $array['user_id'],
            $array['score'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
            'user_id'  => $this->userId,
            'score'    => $this->score,
        ];
    }
}
