<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Updates the game score of the specified user in a game; for bots only.
 */
class SetInlineGameScore extends TdFunction
{
    public const TYPE_NAME = 'setInlineGameScore';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string $inlineMessageId,
        /**
         * Pass true to edit the game message to include the current scoreboard.
         */
        protected bool   $editMessage,
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * The new score.
         */
        protected int    $score,
        /**
         * Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table.
         */
        protected bool   $force,
    ) {}

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
            '@type'             => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'edit_message'      => $this->editMessage,
            'user_id'           => $this->userId,
            'score'             => $this->score,
            'force'             => $this->force,
        ];
    }
}
