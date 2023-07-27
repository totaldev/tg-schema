<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the pinned state of a forum topic; requires can_manage_topics administrator right in the supergroup. There can be up to getOption("pinned_forum_topic_count_max") pinned forum topics
 */
class ToggleForumTopicIsPinned extends TdFunction
{
    public const TYPE_NAME = 'toggleForumTopicIsPinned';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier of the forum topic
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Pass true to pin the topic; pass false to unpin it
     *
     * @var bool
     */
    protected bool $isPinned;

    public function __construct(int $chatId, int $messageThreadId, bool $isPinned)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->isPinned = $isPinned;
    }

    public static function fromArray(array $array): ToggleForumTopicIsPinned
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['is_pinned'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'is_pinned' => $this->isPinned,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }
}
