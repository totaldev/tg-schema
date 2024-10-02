<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A new high score was achieved in a game.
 */
class MessageGameScore extends MessageContent
{
    public const TYPE_NAME = 'messageGameScore';

    public function __construct(
        /**
         * Identifier of the message with the game, can be an identifier of a deleted message.
         */
        protected int $gameMessageId,
        /**
         * Identifier of the game; may be different from the games presented in the message with the game.
         */
        protected int $gameId,
        /**
         * New score.
         */
        protected int $score,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGameScore
    {
        return new static(
            $array['game_message_id'],
            $array['game_id'],
            $array['score'],
        );
    }

    public function getGameId(): int
    {
        return $this->gameId;
    }

    public function getGameMessageId(): int
    {
        return $this->gameMessageId;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_message_id' => $this->gameMessageId,
            'game_id'         => $this->gameId,
            'score'           => $this->score,
        ];
    }
}
