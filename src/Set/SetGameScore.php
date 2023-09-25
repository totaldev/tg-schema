<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Updates the game score of the specified user in the game; for bots only
 */
class SetGameScore extends TdFunction
{
    public const TYPE_NAME = 'setGameScore';

    /**
     * The chat to which the message with the game belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true to edit the game message to include the current scoreboard
     *
     * @var bool
     */
    protected bool $editMessage;

    /**
     * Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table
     *
     * @var bool
     */
    protected bool $force;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    /**
     * The new score
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

    public function __construct(int $chatId, int $messageId, bool $editMessage, int $userId, int $score, bool $force)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->editMessage = $editMessage;
        $this->userId = $userId;
        $this->score = $score;
        $this->force = $force;
    }

    public static function fromArray(array $array): SetGameScore
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['edit_message'],
            $array['user_id'],
            $array['score'],
            $array['force'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'edit_message' => $this->editMessage,
            'user_id' => $this->userId,
            'score' => $this->score,
            'force' => $this->force,
        ];
    }
}
