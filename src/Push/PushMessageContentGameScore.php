<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new high score was achieved in a game
 */
class PushMessageContentGameScore extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGameScore';

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * New score, 0 for pinned message
     *
     * @var int
     */
    protected int $score;

    /**
     * Game title, empty for pinned message
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $title, int $score, bool $isPinned)
    {
        parent::__construct();

        $this->title = $title;
        $this->score = $score;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): PushMessageContentGameScore
    {
        return new static(
            $array['title'],
            $array['score'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'score' => $this->score,
            'is_pinned' => $this->isPinned,
        ];
    }
}
