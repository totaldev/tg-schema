<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Close;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs TDLib that a story is closed by the user
 */
class CloseStory extends TdFunction
{
    public const TYPE_NAME = 'closeStory';

    /**
     * The identifier of the story
     *
     * @var int
     */
    protected int $storyId;

    /**
     * The identifier of the sender of the story to close
     *
     * @var int
     */
    protected int $storySenderChatId;

    public function __construct(int $storySenderChatId, int $storyId)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
    }

    public static function fromArray(array $array): CloseStory
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
