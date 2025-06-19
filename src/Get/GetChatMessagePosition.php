<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\Search\SearchMessagesFilter;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns approximate 1-based position of a message among messages, which can be found by the specified filter in the chat and topic. Cannot be used in secret
 * chats.
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
         * Pass topic identifier to get position among messages only in specific topic; pass null to get position among all chat messages.
         */
        protected MessageTopic         $topicId,
        /**
         * Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, and searchMessagesFilterFailedToSend are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * Message identifier.
         */
        protected int                  $messageId
    ) {}

    public static function fromArray(array $array): GetChatMessagePosition
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['topic_id']),
            TdSchemaRegistry::fromArray($array['filter']),
            $array['message_id'],
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

    public function getTopicId(): MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'topic_id'   => $this->topicId->typeSerialize(),
            'filter'     => $this->filter->typeSerialize(),
            'message_id' => $this->messageId,
        ];
    }
}
