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
        protected int  $storySenderChatId,
        /**
         * Story identifier.
         */
        protected int  $storyId,
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal,
    ) {}

    public static function fromArray(array $array): GetStory
    {
        return new static(
            $array['story_sender_chat_id'],
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

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id'             => $this->storyId,
            'only_local'           => $this->onlyLocal,
        ];
    }
}
