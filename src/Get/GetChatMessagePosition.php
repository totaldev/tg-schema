<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns approximate 1-based position of a message among messages, which can be found by the specified filter in the chat. Cannot be used in secret chats.
 */
class GetChatMessagePosition extends TdFunction
{
    public const TYPE_NAME = 'getChatMessagePosition';

    public function __construct(
        /**
         * Identifier of the chat in which to find message position.
         */
        protected int                  $chatId,
        /**
         * Message identifier.
         */
        protected int                  $messageId,
        /**
         * Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * If not 0, only messages in the specified thread will be considered; supergroups only.
         */
        protected int                  $messageThreadId,
        /**
         * If not 0, only messages in the specified Saved Messages topic will be considered; pass 0 to consider all relevant messages, or for chats other than Saved Messages.
         */
        protected int                  $savedMessagesTopicId,
    ) {}

    public static function fromArray(array $array): GetChatMessagePosition
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['filter']),
            $array['message_thread_id'],
            $array['saved_messages_topic_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFilter(): SearchMessagesFilter
    {
        return $this->filter;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getSavedMessagesTopicId(): int
    {
        return $this->savedMessagesTopicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'message_id'              => $this->messageId,
            'filter'                  => $this->filter->typeSerialize(),
            'message_thread_id'       => $this->messageThreadId,
            'saved_messages_topic_id' => $this->savedMessagesTopicId,
        ];
    }
}
