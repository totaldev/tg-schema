<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Story\StoryList;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Number of chats in a story list has changed.
 */
class UpdateStoryListChatCount extends Update
{
    public const TYPE_NAME = 'updateStoryListChatCount';

    public function __construct(
        /**
         * The story list.
         */
        protected StoryList $storyList,
        /**
         * Approximate total number of chats with active stories in the list.
         */
        protected int       $chatCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryListChatCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story_list']),
            $array['chat_count'],
        );
    }

    public function getChatCount(): int
    {
        return $this->chatCount;
    }

    public function getStoryList(): StoryList
    {
        return $this->storyList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'story_list' => $this->storyList->typeSerialize(),
            'chat_count' => $this->chatCount,
        ];
    }
}
