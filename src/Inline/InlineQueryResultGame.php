<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Game\Game;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents information about a game.
 */
class InlineQueryResultGame extends InlineQueryResult
{
    public const string TYPE_NAME = 'inlineQueryResultGame';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string $id,
        /**
         * Game result.
         */
        protected Game   $game,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultGame
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['game']),
        );
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setGame(Game $value): static
    {
        $this->game = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
            'game'  => $this->game->typeSerialize(),
        ];
    }
}
