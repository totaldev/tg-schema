<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the list of pinned stories on a chat page; requires can_edit_stories administrator right in the chat.
 */
class SetChatPinnedStories extends TdFunction
{
    public const string TYPE_NAME = 'setChatPinnedStories';

    public function __construct(
        /**
         * Identifier of the chat that posted the stories.
         */
        protected int   $chatId,
        /**
         * New list of pinned stories. All stories must be posted to the chat page first. There can be up to getOption("pinned_story_count_max") pinned stories on a chat page.
         *
         * @var int[]
         */
        protected array $storyIds,
    ) {}

    public static function fromArray(array $array): SetChatPinnedStories
    {
        return new static(
            chatId  : $array['chat_id'],
            storyIds: $array['story_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getStoryIds(): array
    {
        return $this->storyIds;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setStoryIds(array $value): static
    {
        $this->storyIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'story_ids' => $this->storyIds,
        ];
    }
}
