<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Game;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains one row of the game high score table
 */
class GameHighScore extends TdObject
{
    public const TYPE_NAME = 'gameHighScore';

    /**
     * Position in the high score table
     *
     * @var int
     */
    protected int $position;

    /**
     * User score
     *
     * @var int
     */
    protected int $score;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $position, int $userId, int $score)
    {
        $this->position = $position;
        $this->userId = $userId;
        $this->score = $score;
    }

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
            '@type' => static::TYPE_NAME,
            'position' => $this->position,
            'user_id' => $this->userId,
            'score' => $this->score,
        ];
    }
}
