<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A new high score was achieved in a game.
 */
class PushMessageContentGameScore extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGameScore';

    public function __construct(
        /**
         * Game title, empty for pinned message.
         */
        protected string $title,
        /**
         * New score, 0 for pinned message.
         */
        protected int    $score,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned
    ) {
        parent::__construct();
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
            '@type'     => static::TYPE_NAME,
            'title'     => $this->title,
            'score'     => $this->score,
            'is_pinned' => $this->isPinned,
        ];
    }
}
