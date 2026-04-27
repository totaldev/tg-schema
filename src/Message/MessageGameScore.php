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
    public const string TYPE_NAME = 'messageGameScore';

    public function __construct(
        /**
         * Identifier of the game; may be different from the games presented in the message with the game.
         */
        protected int $gameId,
        /**
         * Identifier of the message with the game, can be an identifier of a deleted message.
         */
        protected int $gameMessageId,
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
            gameId       : $array['game_id'],
            gameMessageId: $array['game_message_id'],
            score        : $array['score'],
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

    public function setGameId(int $value): static
    {
        $this->gameId = $value;

        return $this;
    }

    public function setGameMessageId(int $value): static
    {
        $this->gameMessageId = $value;

        return $this;
    }

    public function setScore(int $value): static
    {
        $this->score = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'game_id'         => $this->gameId,
            'game_message_id' => $this->gameMessageId,
            'score'           => $this->score,
        ];
    }
}
