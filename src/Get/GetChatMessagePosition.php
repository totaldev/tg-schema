<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns approximate 1-based position of a message among messages, which can be found by the specified filter in the chat. Cannot be used in secret chats
 */
class GetChatMessagePosition extends TdFunction
{
    public const TYPE_NAME = 'getChatMessagePosition';

    /**
     * Identifier of the chat in which to find message position
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function
     *
     * @var SearchMessagesFilter
     */
    protected SearchMessagesFilter $filter;

    /**
     * If not 0, only messages in the specified thread will be considered; supergroups only
     *
     * @var int
     */
    protected int $messageThreadId;

    public function __construct(int $chatId, int $messageId, SearchMessagesFilter $filter, int $messageThreadId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->filter = $filter;
        $this->messageThreadId = $messageThreadId;
    }

    public static function fromArray(array $array): GetChatMessagePosition
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['message_thread_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'filter' => $this->filter->typeSerialize(),
            'message_thread_id' => $this->messageThreadId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }
}
