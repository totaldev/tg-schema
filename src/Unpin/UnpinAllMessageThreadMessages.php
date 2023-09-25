<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unpin;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Removes all pinned messages from a forum topic; requires can_pin_messages rights in the supergroup
 */
class UnpinAllMessageThreadMessages extends TdFunction
{
    public const TYPE_NAME = 'unpinAllMessageThreadMessages';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier in which messages will be unpinned
     *
     * @var int
     */
    protected int $messageThreadId;

    public function __construct(int $chatId, int $messageThreadId)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): UnpinAllMessageThreadMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
        ];
    }
}
