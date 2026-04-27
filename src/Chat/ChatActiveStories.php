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
    public const string TYPE_NAME = 'chatActiveStories';

    public function __construct(
        /**
         * True, if the stories are shown in the main story list and can be archived; otherwise, the stories can be hidden from the main story list only by calling removeTopChat with topChatCategoryUsers and the chat_id. Stories of the current user can't be archived nor hidden using removeTopChat.
         */
        protected bool       $canBeArchived,
        /**
         * Identifier of the chat that posted the stories.
         */
        protected int        $chatId,
        /**
         * Identifier of the story list in which the stories are shown; may be null if the stories aren't shown in a story list.
         */
        protected ?StoryList $list,
        /**
         * Identifier of the last read active story.
         */
        protected int        $maxReadStoryId,
        /**
         * A parameter used to determine order of the stories in the story list; 0 if the stories don't need to be shown in the story list. Stories must be sorted by the pair (order, story_poster_chat_id) in descending order.
         */
        protected int        $order,
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
            canBeArchived : $array['can_be_archived'],
            chatId        : $array['chat_id'],
            list          : (isset($array['list']) ? TdSchemaRegistry::fromArray($array['list']) : null),
            maxReadStoryId: $array['max_read_story_id'],
            order         : $array['order'],
            stories       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stories']),
        );
    }

    public function getCanBeArchived(): bool
    {
        return $this->canBeArchived;
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

    public function setCanBeArchived(bool $value): static
    {
        $this->canBeArchived = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setList(?StoryList $value): static
    {
        $this->list = $value;

        return $this;
    }

    public function setMaxReadStoryId(int $value): static
    {
        $this->maxReadStoryId = $value;

        return $this;
    }

    public function setOrder(int $value): static
    {
        $this->order = $value;

        return $this;
    }

    public function setStories(array $value): static
    {
        $this->stories = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'can_be_archived'   => $this->canBeArchived,
            'chat_id'           => $this->chatId,
            'list'              => (null !== $this->list ? $this->list->jsonSerialize() : null),
            'max_read_story_id' => $this->maxReadStoryId,
            'order'             => $this->order,
            'stories'           => array_map(static fn($x) => $x->jsonSerialize(), $this->stories),
        ];
    }
}
