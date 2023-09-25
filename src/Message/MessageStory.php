<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a forwarded story
 */
class MessageStory extends MessageContent
{
    public const TYPE_NAME = 'messageStory';

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $storySenderChatId;

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

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getViaMention(): bool
    {
        return $this->viaMention;
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
}
