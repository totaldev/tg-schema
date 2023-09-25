<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a story is accessible after expiration. Can be called only if story.can_toggle_is_pinned == true
 */
class ToggleStoryIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleStoryIsPinned';

    /**
     * Pass true to make the story accessible after expiration; pass false to make it private
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Identifier of the story
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

    public function __construct(int $storySenderChatId, int $storyId, bool $isPinned)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleStoryIsPinned
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
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
            'is_pinned' => $this->isPinned,
        ];
    }
}
