<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports a story to the Telegram moderators.
 */
class ReportStory extends TdFunction
{
    public const TYPE_NAME = 'reportStory';

    public function __construct(
        /**
         * The identifier of the sender of the story to report.
         */
        protected int          $storySenderChatId,
        /**
         * The identifier of the story to report.
         */
        protected int          $storyId,
        /**
         * The reason for reporting the story.
         */
        protected ReportReason $reason,
        /**
         * Additional report details; 0-1024 characters.
         */
        protected string       $text,
    ) {}

    public static function fromArray(array $array): ReportStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['text'],
        );
    }

    public function getReason(): ReportReason
    {
        return $this->reason;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id'             => $this->storyId,
            'reason'               => $this->reason->typeSerialize(),
            'text'                 => $this->text,
        ];
    }
}
