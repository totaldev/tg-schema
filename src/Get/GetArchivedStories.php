<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of all stories of the current user. The stories are returned in a reverse chronological order (i.e., in order of decreasing story_id). For optimal performance, the number of returned stories is chosen by TDLib
 */
class GetArchivedStories extends TdFunction
{
    public const TYPE_NAME = 'getArchivedStories';

    /**
     * Identifier of the story starting from which stories must be returned; use 0 to get results from the last story
     *
     * @var int
     */
    protected int $fromStoryId;

    /**
     * The maximum number of stories to be returned For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the specified limit
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $fromStoryId, int $limit)
    {
        $this->fromStoryId = $fromStoryId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetArchivedStories
    {
        return new static(
            $array['from_story_id'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'from_story_id' => $this->fromStoryId,
            'limit' => $this->limit,
        ];
    }

    public function getFromStoryId(): int
    {
        return $this->fromStoryId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
