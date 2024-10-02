<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the high scores for a game and some part of the high score table in the range of the specified user; for bots only.
 */
class GetGameHighScores extends TdFunction
{
    public const TYPE_NAME = 'getGameHighScores';

    public function __construct(
        /**
         * The chat that contains the message with the game.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): GetGameHighScores
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'user_id'    => $this->userId,
        ];
    }
}
