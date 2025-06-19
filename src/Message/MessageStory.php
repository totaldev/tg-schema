<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A message with a forwarded story.
 */
class MessageStory extends MessageContent
{
    public const TYPE_NAME = 'messageStory';

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
         * True, if the story was automatically forwarded because of a mention of the user.
         */
        protected bool $viaMention
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            $array['via_mention'],
        );
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function getViaMention(): bool
    {
        return $this->viaMention;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'via_mention'          => $this->viaMention,
        ];
    }
}
