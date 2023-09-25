<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Deletes a previously sent story. Can be called only if story.can_be_deleted == true
 */
class DeleteStory extends TdFunction
{
    public const TYPE_NAME = 'deleteStory';

    /**
     * Identifier of the story to delete
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

    public function __construct(int $storySenderChatId, int $storyId)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
    }

    public static function fromArray(array $array): DeleteStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
        ];
    }
}
