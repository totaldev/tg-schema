<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns messages in a chat. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id). For optimal performance, the
 * number of returned messages is chosen by TDLib. This is an offline method if only_local is true.
 */
class GetChatHistory extends TdFunction
{
    public const string TYPE_NAME = 'getChatHistory';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Identifier of the message starting from which history must be fetched; use 0 to get results from the last message.
         */
        protected int  $fromMessageId,
        /**
         * The maximum number of messages to be returned; must be positive and can't be greater than 100. If the offset is negative, then the limit must be greater than or equal to -offset. For optimal performance, the number of returned messages is chosen by TDLib and can be smaller than the specified limit.
         */
        protected int  $limit,
        /**
         * Specify 0 to get results from exactly the message from_message_id or a negative number from -99 to -1 to get additionally -offset newer messages.
         */
        protected int  $offset,
        /**
         * Pass true to get only messages that are available without sending network requests.
         */
        protected bool $onlyLocal,
    ) {}

    public static function fromArray(array $array): GetChatHistory
    {
        return new static(
            chatId       : $array['chat_id'],
            fromMessageId: $array['from_message_id'],
            limit        : $array['limit'],
            offset       : $array['offset'],
            onlyLocal    : $array['only_local'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFromMessageId(): int
    {
        return $this->fromMessageId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFromMessageId(int $value): static
    {
        $this->fromMessageId = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function setOnlyLocal(bool $value): static
    {
        $this->onlyLocal = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'from_message_id' => $this->fromMessageId,
            'limit'           => $this->limit,
            'offset'          => $this->offset,
            'only_local'      => $this->onlyLocal,
        ];
    }
}
