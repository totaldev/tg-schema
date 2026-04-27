<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a story.
 */
class GetStory extends TdFunction
{
    public const string TYPE_NAME = 'getStory';

    public function __construct(
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal,
        /**
         * Story identifier.
         */
        protected int  $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int  $storyPosterChatId,
    ) {}

    public static function fromArray(array $array): GetStory
    {
        return new static(
            onlyLocal        : $array['only_local'],
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
        );
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function setOnlyLocal(bool $value): static
    {
        $this->onlyLocal = $value;

        return $this;
    }

    public function setStoryId(int $value): static
    {
        $this->storyId = $value;

        return $this;
    }

    public function setStoryPosterChatId(int $value): static
    {
        $this->storyPosterChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'only_local'           => $this->onlyLocal,
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
        ];
    }
}
