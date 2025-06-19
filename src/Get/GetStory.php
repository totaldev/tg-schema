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
    public const TYPE_NAME = 'getStory';

    public function __construct(
        /**
         * Identifier of the chat that posted the story.
         */
        protected int  $storyPosterChatId,
        /**
         * Story identifier.
         */
        protected int  $storyId,
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal
    ) {}

    public static function fromArray(array $array): GetStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            $array['only_local'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'only_local'           => $this->onlyLocal,
        ];
    }
}
