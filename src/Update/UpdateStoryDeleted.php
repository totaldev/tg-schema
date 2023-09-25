<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story became inaccessible
 */
class UpdateStoryDeleted extends Update
{
    public const TYPE_NAME = 'updateStoryDeleted';

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

    public function __construct(int $storySenderChatId, int $storyId)
    {
        parent::__construct();

        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
    }

    public static function fromArray(array $array): UpdateStoryDeleted
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
