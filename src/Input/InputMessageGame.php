<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A message with a game; not supported for channels or secret chats.
 */
class InputMessageGame extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageGame';

    public function __construct(
        /**
         * User identifier of the bot that owns the game.
         */
        protected int    $botUserId,
        /**
         * Short name of the game.
         */
        protected string $gameShortName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageGame
    {
        return new static(
            $array['bot_user_id'],
            $array['game_short_name'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'bot_user_id'     => $this->botUserId,
            'game_short_name' => $this->gameShortName,
        ];
    }
}
