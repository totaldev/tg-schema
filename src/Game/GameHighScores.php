<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Game;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of game high scores.
 */
class GameHighScores extends TdObject
{
    public const TYPE_NAME = 'gameHighScores';

    public function __construct(
        /**
         * A list of game high scores.
         *
         * @var GameHighScore[]
         */
        protected array $scores
    ) {}

    public static function fromArray(array $array): GameHighScores
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['scores']),
        );
    }

    public function getScores(): array
    {
        return $this->scores;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'scores' => array_map(static fn($x) => $x->typeSerialize(), $this->scores),
        ];
    }
}
