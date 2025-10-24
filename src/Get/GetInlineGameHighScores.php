<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns game high scores and some part of the high score table in the range of the specified user; for bots only.
 */
class GetInlineGameHighScores extends TdFunction
{
    public const string TYPE_NAME = 'getInlineGameHighScores';

    public function __construct(
        /**
         * Inline message identifier.
         */
        protected string $inlineMessageId,
        /**
         * User identifier.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): GetInlineGameHighScores
    {
        return new static(
            $array['inline_message_id'],
            $array['user_id'],
        );
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

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
            'inline_message_id' => $this->inlineMessageId,
            'user_id'           => $this->userId,
        ];
    }
}
