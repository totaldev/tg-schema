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
    public const string TYPE_NAME = 'messageStory';

    public function __construct(
        /**
         * Story identifier.
         */
        protected int  $storyId,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int  $storyPosterChatId,
        /**
         * True, if the story was automatically forwarded because of a mention of the user.
         */
        protected bool $viaMention,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageStory
    {
        return new static(
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
            viaMention       : $array['via_mention'],
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

    public function setViaMention(bool $value): static
    {
        $this->viaMention = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'via_mention'          => $this->viaMention,
        ];
    }
}
