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
    public const string TYPE_NAME = 'pushMessageContentGameScore';

    public function __construct(
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
        /**
         * New score, 0 for pinned message.
         */
        protected int    $score,
        /**
         * Game title, empty for pinned message.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGameScore
    {
        return new static(
            isPinned: $array['is_pinned'],
            score   : $array['score'],
            title   : $array['title'],
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

    public function setIsPinned(bool $value): static
    {
        $this->isPinned = $value;

        return $this;
    }

    public function setScore(int $value): static
    {
        $this->score = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'is_pinned' => $this->isPinned,
            'score'     => $this->score,
            'title'     => $this->title,
        ];
    }
}
