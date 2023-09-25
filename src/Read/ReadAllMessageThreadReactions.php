<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Read;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Marks all reactions in a forum topic as read
 */
class ReadAllMessageThreadReactions extends TdFunction
{
    public const TYPE_NAME = 'readAllMessageThreadReactions';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier in which reactions are marked as read
     *
     * @var int
     */
    protected int $messageThreadId;

    public function __construct(int $chatId, int $messageThreadId)
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): ReadAllMessageThreadReactions
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
