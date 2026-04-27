<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Updates the game score of the specified user in the game; for bots only.
 */
class SetGameScore extends TdFunction
{
    public const string TYPE_NAME = 'setGameScore';

    public function __construct(
        /**
         * The chat to which the message with the game belongs.
         */
        protected int  $chatId,
        /**
         * Pass true to edit the game message to include the current scoreboard.
         */
        protected bool $editMessage,
        /**
         * Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table.
         */
        protected bool $force,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
        /**
         * The new score.
         */
        protected int  $score,
        /**
         * User identifier.
         */
        protected int  $userId,
    ) {}

    public static function fromArray(array $array): SetGameScore
    {
        return new static(
            chatId     : $array['chat_id'],
            editMessage: $array['edit_message'],
            force      : $array['force'],
            messageId  : $array['message_id'],
            score      : $array['score'],
            userId     : $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEditMessage(): bool
    {
        return $this->editMessage;
    }

    public function getForce(): bool
    {
        return $this->force;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setEditMessage(bool $value): static
    {
        $this->editMessage = $value;

        return $this;
    }

    public function setForce(bool $value): static
    {
        $this->force = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setScore(int $value): static
    {
        $this->score = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'edit_message' => $this->editMessage,
            'force'        => $this->force,
            'message_id'   => $this->messageId,
            'score'        => $this->score,
            'user_id'      => $this->userId,
        ];
    }
}
