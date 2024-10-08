<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Game\Game;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a game.
 */
class MessageGame extends MessageContent
{
    public const TYPE_NAME = 'messageGame';

    public function __construct(
        /**
         * The game description.
         */
        protected Game $game
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGame
    {
        return new static(
            TdSchemaRegistry::fromArray($array['game']),
        );
    }

    public function getGame(): Game
    {
        return $this->game;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'game'  => $this->game->typeSerialize(),
        ];
    }
}
