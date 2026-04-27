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
    public const string TYPE_NAME = 'getChatMessagePosition';

    public function __construct(
        /**
         * Identifier of the chat in which to find message position.
         */
        protected int                  $chatId,
        /**
         * Filter for message content; searchMessagesFilterEmpty, searchMessagesFilterUnreadMention, searchMessagesFilterUnreadReaction, searchMessagesFilterUnreadPollVote, and searchMessagesFilterFailedToSend are unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * Message identifier.
         */
        protected int                  $messageId,
        /**
         * Pass topic identifier to get position among messages only in specific topic; pass null to get position among all chat messages; message threads aren't supported.
         */
        protected ?MessageTopic        $topicId = null,
    ) {}

    public static function fromArray(array $array): GetChatMessagePosition
    {
        return new static(
            chatId   : $array['chat_id'],
            filter   : TdSchemaRegistry::fromArray($array['filter']),
            messageId: $array['message_id'],
            topicId  : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
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

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFilter(SearchMessagesFilter $value): static
    {
        $this->filter = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'filter'     => $this->filter->jsonSerialize(),
            'message_id' => $this->messageId,
            'topic_id'   => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
