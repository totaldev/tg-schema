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
 * Returns approximate number of messages of the specified type in the chat or its topic.
 */
class GetChatMessageCount extends TdFunction
{
    public const string TYPE_NAME = 'getChatMessageCount';

    public function __construct(
        /**
         * Identifier of the chat in which to count messages.
         */
        protected int                  $chatId,
        /**
         * Filter for message content; searchMessagesFilterEmpty is unsupported in this function.
         */
        protected SearchMessagesFilter $filter,
        /**
         * Pass true to get the number of messages without sending network requests, or -1 if the number of messages is unknown locally.
         */
        protected bool                 $returnLocal,
        /**
         * Pass topic identifier to get number of messages only in specific topic; pass null to get number of messages in all topics; message threads aren't supported.
         */
        protected ?MessageTopic        $topicId = null,
    ) {}

    public static function fromArray(array $array): GetChatMessageCount
    {
        return new static(
            chatId     : $array['chat_id'],
            filter     : TdSchemaRegistry::fromArray($array['filter']),
            returnLocal: $array['return_local'],
            topicId    : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
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

    public function getReturnLocal(): bool
    {
        return $this->returnLocal;
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

    public function setReturnLocal(bool $value): static
    {
        $this->returnLocal = $value;

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
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'filter'       => $this->filter->jsonSerialize(),
            'return_local' => $this->returnLocal,
            'topic_id'     => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
