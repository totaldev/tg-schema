<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;

/**
 * Reports a story to the Telegram moderators.
 */
class ReportStory extends TdFunction
{
    public const string TYPE_NAME = 'reportStory';

    public function __construct(
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
        /**
         * The identifier of the story to report.
         */
        protected int    $storyId,
        /**
         * The identifier of the poster of the story to report.
         */
        protected int    $storyPosterChatId,
        /**
         * Additional report details; 0-1024 characters; leave empty for the initial request.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): ReportStory
    {
        return new static(
            optionId         : $array['option_id'],
            storyId          : $array['story_id'],
            storyPosterChatId: $array['story_poster_chat_id'],
            text             : $array['text'],
        );
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStoryPosterChatId(): int
    {
        return $this->storyPosterChatId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

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

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'option_id'            => $this->optionId,
            'story_id'             => $this->storyId,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'text'                 => $this->text,
        ];
    }
}
