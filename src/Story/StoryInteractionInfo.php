<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about interactions with a story.
 */
class StoryInteractionInfo extends TdObject
{
    public const string TYPE_NAME = 'storyInteractionInfo';

    public function __construct(
        /**
         * Number of times the story was forwarded; 0 if none or unknown.
         */
        protected int   $forwardCount,
        /**
         * Number of reactions added to the story; 0 if none or unknown.
         */
        protected int   $reactionCount,
        /**
         * Identifiers of at most 3 recent viewers of the story.
         *
         * @var int[]
         */
        protected array $recentViewerUserIds,
        /**
         * Number of times the story was viewed.
         */
        protected int   $viewCount,
    ) {}

    public static function fromArray(array $array): StoryInteractionInfo
    {
        return new static(
            forwardCount       : $array['forward_count'],
            reactionCount      : $array['reaction_count'],
            recentViewerUserIds: $array['recent_viewer_user_ids'],
            viewCount          : $array['view_count'],
        );
    }

    public function getForwardCount(): int
    {
        return $this->forwardCount;
    }

    public function getReactionCount(): int
    {
        return $this->reactionCount;
    }

    public function getRecentViewerUserIds(): array
    {
        return $this->recentViewerUserIds;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function setForwardCount(int $value): static
    {
        $this->forwardCount = $value;

        return $this;
    }

    public function setReactionCount(int $value): static
    {
        $this->reactionCount = $value;

        return $this;
    }

    public function setRecentViewerUserIds(array $value): static
    {
        $this->recentViewerUserIds = $value;

        return $this;
    }

    public function setViewCount(int $value): static
    {
        $this->viewCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'forward_count'          => $this->forwardCount,
            'reaction_count'         => $this->reactionCount,
            'recent_viewer_user_ids' => $this->recentViewerUserIds,
            'view_count'             => $this->viewCount,
        ];
    }
}
