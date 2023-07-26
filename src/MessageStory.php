<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A message with a forwarded story
 */
class MessageStory extends MessageContent
{
    public const TYPE_NAME = 'messageStory';

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * True, if the story was automatically forwarded because of a mention of the user
     *
     * @var bool
     */
    protected bool $viaMention;

    public function __construct(int $storySenderChatId, int $storyId, bool $viaMention)
    {
        parent::__construct();

        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->viaMention = $viaMention;
    }

    public static function fromArray(array $array): MessageStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            $array['via_mention'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'via_mention' => $this->viaMention,
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

    public function getViaMention(): bool
    {
        return $this->viaMention;
    }
}
