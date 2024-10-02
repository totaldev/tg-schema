<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Story\StoryInfo;
use Totaldev\TgSchema\Story\StoryList;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes active stories posted by a chat.
 */
class ChatActiveStories extends TdObject
{
    public const TYPE_NAME = 'chatActiveStories';

    public function __construct(
        /**
         * Identifier of the chat that posted the stories.
         */
        protected int        $chatId,
        /**
         * Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list.
         */
        protected ?StoryList $list,
        /**
         * A parameter used to determine order of the stories in the story list; 0 if the stories doesn't need to be shown in the story list. Stories must be sorted by the pair (order, story_sender_chat_id) in descending order.
         */
        protected int        $order,
        /**
         * Identifier of the last read active story.
         */
        protected int        $maxReadStoryId,
        /**
         * Basic information about the stories; use getStory to get full information about the stories. The stories are in chronological order (i.e., in order of increasing story identifiers).
         *
         * @var StoryInfo[]
         */
        protected array      $stories,
    ) {}

    public static function fromArray(array $array): ChatActiveStories
    {
        return new static(
            $array['chat_id'],
            isset($array['list']) ? TdSchemaRegistry::fromArray($array['list']) : null,
            $array['order'],
            $array['max_read_story_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getList(): ?StoryList
    {
        return $this->list;
    }

    public function getMaxReadStoryId(): int
    {
        return $this->maxReadStoryId;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getStories(): array
    {
        return $this->stories;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'list'              => (isset($this->list) ? $this->list : null),
            'order'             => $this->order,
            'max_read_story_id' => $this->maxReadStoryId,
            array_map(fn($x) => $x->typeSerialize(), $this->stories),
        ];
    }
}
