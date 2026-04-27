<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Story\StoryList;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes story list in which stories from the chat are shown.
 */
class SetChatActiveStoriesList extends TdFunction
{
    public const string TYPE_NAME = 'setChatActiveStoriesList';

    public function __construct(
        /**
         * Identifier of the chat that posted stories.
         */
        protected int       $chatId,
        /**
         * New list for active stories posted by the chat.
         */
        protected StoryList $storyList,
    ) {}

    public static function fromArray(array $array): SetChatActiveStoriesList
    {
        return new static(
            chatId   : $array['chat_id'],
            storyList: TdSchemaRegistry::fromArray($array['story_list']),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setStoryList(StoryList $value): static
    {
        $this->storyList = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'story_list' => $this->storyList->jsonSerialize(),
        ];
    }
}
