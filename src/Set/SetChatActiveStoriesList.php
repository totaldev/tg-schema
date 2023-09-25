<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Story\StoryList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes story list in which stories from the chat are shown
 */
class SetChatActiveStoriesList extends TdFunction
{
    public const TYPE_NAME = 'setChatActiveStoriesList';

    /**
     * Identifier of the chat that posted stories
     *
     * @var int
     */
    protected int $chatId;

    /**
     * New list for active stories posted by the chat
     *
     * @var StoryList
     */
    protected StoryList $storyList;

    public function __construct(int $chatId, StoryList $storyList)
    {
        $this->chatId = $chatId;
        $this->storyList = $storyList;
    }

    public static function fromArray(array $array): SetChatActiveStoriesList
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['story_list']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStoryList(): StoryList
    {
        return $this->storyList;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'story_list' => $this->storyList->typeSerialize(),
        ];
    }
}
