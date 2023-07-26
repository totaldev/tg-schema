<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Toggles whether a topic is closed in a forum supergroup chat; requires can_manage_topics administrator right in the supergroup unless the user is creator of the topic
 */
class ToggleForumTopicIsClosed extends TdFunction
{
    public const TYPE_NAME = 'toggleForumTopicIsClosed';

    /**
     * Identifier of the chat
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
     * Pass true to close the topic; pass false to reopen it
     *
     * @var bool
     */
    protected bool $isClosed;

    public function __construct(int $chatId, int $messageThreadId, bool $isClosed)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->isClosed = $isClosed;
    }

    public static function fromArray(array $array): ToggleForumTopicIsClosed
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['is_closed'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'is_closed' => $this->isClosed,
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

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }
}
