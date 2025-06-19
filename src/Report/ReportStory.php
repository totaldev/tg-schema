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
    public const TYPE_NAME = 'reportStory';

    public function __construct(
        /**
         * The identifier of the poster of the story to report.
         */
        protected int    $storyPosterChatId,
        /**
         * The identifier of the story to report.
         */
        protected int    $storyId,
        /**
         * Option identifier chosen by the user; leave empty for the initial request.
         */
        protected string $optionId,
        /**
         * Additional report details; 0-1024 characters; leave empty for the initial request.
         */
        protected string $text
    ) {}

    public static function fromArray(array $array): ReportStory
    {
        return new static(
            $array['story_poster_chat_id'],
            $array['story_id'],
            $array['option_id'],
            $array['text'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_poster_chat_id' => $this->storyPosterChatId,
            'story_id'             => $this->storyId,
            'option_id'            => $this->optionId,
            'text'                 => $this->text,
        ];
    }
}
