<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes active stories posted by a chat
 */
class ChatActiveStories extends TdObject
{
    public const TYPE_NAME = 'chatActiveStories';

    /**
     * Identifier of the chat that posted the stories
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list
     *
     * @var StoryList|null
     */
    protected ?StoryList $list;

    /**
     * A parameter used to determine order of the stories in the story list; 0 if the stories doesn't need to be shown in the story list. Stories must be sorted by the pair (order, story_sender_chat_id) in descending order
     *
     * @var int
     */
    protected int $order;

    /**
     * Identifier of the last read active story
     *
     * @var int
     */
    protected int $maxReadStoryId;

    /**
     * Basic information about the stories; use getStory to get full information about the stories. The stories are in a chronological order (i.e., in order of increasing story identifiers)
     *
     * @var StoryInfo[]
     */
    protected array $stories;

    public function __construct(int $chatId, ?StoryList $list, int $order, int $maxReadStoryId, array $stories)
    {
        $this->chatId = $chatId;
        $this->list = $list;
        $this->order = $order;
        $this->maxReadStoryId = $maxReadStoryId;
        $this->stories = $stories;
    }

    public static function fromArray(array $array): ChatActiveStories
    {
        return new static(
            $array['chat_id'],
            (isset($array['list']) ? TdSchemaRegistry::fromArray($array['list']) : null),
            $array['order'],
            $array['max_read_story_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'list' => (isset($this->list) ? $this->list : null),
            'order' => $this->order,
            'max_read_story_id' => $this->maxReadStoryId,
            array_map(fn($x) => $x->typeSerialize(), $this->stories),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getList(): ?StoryList
    {
        return $this->list;
    }

    public function getOrder(): int
    {
        return $this->order;
    }

    public function getMaxReadStoryId(): int
    {
        return $this->maxReadStoryId;
    }

    public function getStories(): array
    {
        return $this->stories;
    }
}
