<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageViewer;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns viewers of a recent outgoing story. The method can be called if story.can_get_viewers == true. The views are returned in a reverse chronological order (i.e., in order of decreasing view_date) For optimal performance, the number of returned stories is chosen by TDLib
 */
class GetStoryViewers extends TdFunction
{
    public const TYPE_NAME = 'getStoryViewers';

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * A viewer from which to return next viewers; pass null to get results from the beginning
     *
     * @var MessageViewer
     */
    protected MessageViewer $offsetViewer;

    /**
     * The maximum number of story viewers to return For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $storyId, MessageViewer $offsetViewer, int $limit)
    {
        $this->storyId = $storyId;
        $this->offsetViewer = $offsetViewer;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetStoryViewers
    {
        return new static(
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['offset_viewer']),
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_id' => $this->storyId,
            'offset_viewer' => $this->offsetViewer->typeSerialize(),
            'limit' => $this->limit,
        ];
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getOffsetViewer(): MessageViewer
    {
        return $this->offsetViewer;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
