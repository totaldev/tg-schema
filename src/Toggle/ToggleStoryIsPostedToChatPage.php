<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a story is accessible after expiration. Can be called only if story.can_toggle_is_posted_to_chat_page == true.
 */
class ToggleStoryIsPostedToChatPage extends TdFunction
{
    public const TYPE_NAME = 'toggleStoryIsPostedToChatPage';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int  $storyPosterChatId,
        /**
         * Identifier of the story.
         */
        protected int  $storyId,
        /**
         * Pass true to make the story accessible after expiration; pass false to make it private.
         */
        protected bool $isPostedToChatPage
    ) {}

    public static function fromArray(array $array): ToggleStoryIsPostedToChatPage
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            $array['is_posted_to_chat_page'],
        );
    }

    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'story_poster_chat_id'   => $this->storyPosterChatId,
            'story_id'               => $this->storyId,
            'is_posted_to_chat_page' => $this->isPostedToChatPage,
        ];
    }
}
