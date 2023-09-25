<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Updates the game score of the specified user in a game; for bots only
 */
class SetInlineGameScore extends TdFunction
{
    public const TYPE_NAME = 'setInlineGameScore';

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
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

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

    public function __construct(string $inlineMessageId, bool $editMessage, int $userId, int $score, bool $force)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->editMessage = $editMessage;
        $this->userId = $userId;
        $this->score = $score;
        $this->force = $force;
    }

    public static function fromArray(array $array): SetInlineGameScore
    {
        return new static(
            $array['inline_message_id'],
            $array['edit_message'],
            $array['user_id'],
            $array['score'],
            $array['force'],
        );
    }

    public function getEditMessage(): bool
    {
        return $this->editMessage;
    }

    public function getForce(): bool
    {
        return $this->force;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
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
            'inline_message_id' => $this->inlineMessageId,
            'edit_message' => $this->editMessage,
            'user_id' => $this->userId,
            'score' => $this->score,
            'force' => $this->force,
        ];
    }
}
