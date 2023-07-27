<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a replied story
 */
class MessageReplyToStory extends MessageReplyTo
{
    public const TYPE_NAME = 'messageReplyToStory';

    /**
     * The identifier of the sender of the replied story. Currently, stories can be replied only in the sender's chat
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * The identifier of the replied story
     *
     * @var int
     */
    protected int $storyId;

    public function __construct(int $storySenderChatId, int $storyId)
    {
        parent::__construct();

        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
    }

    public static function fromArray(array $array): MessageReplyToStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
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
}
