<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the list of all stories posted by the given chat; requires can_edit_stories rights for channel chats. The stories are returned in a reverse
 * chronological order (i.e., in order of decreasing story_id). For optimal performance, the number of returned stories is chosen by TDLib
 */
class GetChatArchivedStories extends TdFunction
{
    public const TYPE_NAME = 'getChatArchivedStories';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the story starting from which stories must be returned; use 0 to get results from the last story
     *
     * @var int
     */
    protected int $fromStoryId;

    /**
     * The maximum number of stories to be returned For optimal performance, the number of returned stories is chosen by TDLib and can be smaller than the
     * specified limit
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $chatId, int $fromStoryId, int $limit)
    {
        $this->chatId = $chatId;
        $this->fromStoryId = $fromStoryId;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetChatArchivedStories
    {
        return new static(
            $array['chat_id'],
            $array['from_story_id'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromStoryId(): int
    {
        return $this->fromStoryId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'from_story_id' => $this->fromStoryId,
            'limit' => $this->limit,
        ];
    }
}
