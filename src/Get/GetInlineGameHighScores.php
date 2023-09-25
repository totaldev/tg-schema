<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns game high scores and some part of the high score table in the range of the specified user; for bots only
 */
class GetInlineGameHighScores extends TdFunction
{
    public const TYPE_NAME = 'getInlineGameHighScores';

    /**
     * Inline message identifier
     *
     * @var string
     */
    protected string $inlineMessageId;

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(string $inlineMessageId, int $userId)
    {
        $this->inlineMessageId = $inlineMessageId;
        $this->userId = $userId;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_message_id' => $this->inlineMessageId,
            'user_id' => $this->userId,
        ];
    }
}
