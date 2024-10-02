<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the last message sent in a chat no later than the specified date.
 */
class GetChatMessageByDate extends TdFunction
{
    public const TYPE_NAME = 'getChatMessageByDate';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Point in time (Unix timestamp) relative to which to search for messages.
         */
        protected int $date,
    ) {}

    public static function fromArray(array $array): GetChatMessageByDate
    {
        return new static(
            $array['chat_id'],
            $array['date'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'date'    => $this->date,
        ];
    }
}
