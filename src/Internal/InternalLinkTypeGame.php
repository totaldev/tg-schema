<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a game. Call searchPublicChat with the given bot username, check that the user is a bot, ask the current user to select a chat to send
 * the game, and then call sendMessage with inputMessageGame.
 */
class InternalLinkTypeGame extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeGame';

    public function __construct(
        /**
         * Username of the bot that owns the game.
         */
        protected string $botUsername,
        /**
         * Short name of the game.
         */
        protected string $gameShortName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeGame
    {
        return new static(
            $array['bot_username'],
            $array['game_short_name'],
        );
    }

    public function getBotUsername(): string
    {
        return $this->botUsername;
    }

    public function getGameShortName(): string
    {
        return $this->gameShortName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'bot_username'    => $this->botUsername,
            'game_short_name' => $this->gameShortName,
        ];
    }
}
