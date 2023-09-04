<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about interactions with a story
 */
class StoryInteractionInfo extends TdObject
{
    public const TYPE_NAME = 'storyInteractionInfo';

    /**
     * Number of times the story was viewed
     *
     * @var int
     */
    protected int $viewCount;

    /**
     * Number of reactions added to the story
     *
     * @var int
     */
    protected int $reactionCount;

    /**
     * Identifiers of at most 3 recent viewers of the story
     *
     * @var int[]
     */
    protected array $recentViewerUserIds;

    public function __construct(int $viewCount, int $reactionCount, array $recentViewerUserIds)
    {
        $this->viewCount = $viewCount;
        $this->reactionCount = $reactionCount;
        $this->recentViewerUserIds = $recentViewerUserIds;
    }

    public static function fromArray(array $array): StoryInteractionInfo
    {
        return new static(
            $array['view_count'],
            $array['reaction_count'],
            $array['recent_viewer_user_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'view_count' => $this->viewCount,
            'reaction_count' => $this->reactionCount,
            'recent_viewer_user_ids' => $this->recentViewerUserIds,
        ];
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function getReactionCount(): int
    {
        return $this->reactionCount;
    }

    public function getRecentViewerUserIds(): array
    {
        return $this->recentViewerUserIds;
    }
}
