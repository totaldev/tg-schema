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
    public const TYPE_NAME = 'storyInteractionInfo';

    public function __construct(
        /**
         * Number of times the story was viewed.
         */
        protected int   $viewCount,
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
        protected array $recentViewerUserIds
    ) {}

    public static function fromArray(array $array): StoryInteractionInfo
    {
        return new static(
            $array['view_count'],
            $array['forward_count'],
            $array['reaction_count'],
            $array['recent_viewer_user_ids'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'view_count'             => $this->viewCount,
            'forward_count'          => $this->forwardCount,
            'reaction_count'         => $this->reactionCount,
            'recent_viewer_user_ids' => $this->recentViewerUserIds,
        ];
    }
}
