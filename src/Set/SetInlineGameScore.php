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
    public const string TYPE_NAME = 'setInlineGameScore';

    public function __construct(
        /**
         * Pass true to edit the game message to include the current scoreboard.
         */
        protected bool   $editMessage,
        /**
         * Pass true to update the score even if it decreases. If the score is 0, the user will be deleted from the high score table.
         */
        protected bool   $force,
        /**
         * Inline message identifier.
         */
        protected string $inlineMessageId,
        /**
         * The new score.
         */
        protected int    $score,
        /**
         * User identifier.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): SetInlineGameScore
    {
        return new static(
            editMessage    : $array['edit_message'],
            force          : $array['force'],
            inlineMessageId: $array['inline_message_id'],
            score          : $array['score'],
            userId         : $array['user_id'],
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

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

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
            '@type'             => static::TYPE_NAME,
            'edit_message'      => $this->editMessage,
            'force'             => $this->force,
            'inline_message_id' => $this->inlineMessageId,
            'score'             => $this->score,
            'user_id'           => $this->userId,
        ];
    }
}
