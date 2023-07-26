<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Reports a story to the Telegram moderators
 */
class ReportStory extends TdFunction
{
    public const TYPE_NAME = 'reportStory';

    /**
     * The identifier of the sender of the story to report
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * The identifier of the story to report
     *
     * @var int
     */
    protected int $storyId;

    /**
     * The reason for reporting the story
     *
     * @var ReportReason
     */
    protected ReportReason $reason;

    /**
     * Additional report details; 0-1024 characters
     *
     * @var string
     */
    protected string $text;

    public function __construct(int $storySenderChatId, int $storyId, ReportReason $reason, string $text)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->reason = $reason;
        $this->text = $text;
    }

    public static function fromArray(array $array): ReportStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'reason' => $this->reason->typeSerialize(),
            'text' => $this->text,
        ];
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getReason(): ReportReason
    {
        return $this->reason;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
