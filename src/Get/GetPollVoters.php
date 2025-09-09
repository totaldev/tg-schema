<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns message senders voted for the specified option in a non-anonymous polls. For optimal performance, the number of returned users is chosen by TDLib.
 */
class GetPollVoters extends TdFunction
{
    public const TYPE_NAME = 'getPollVoters';

    public function __construct(
        /**
         * Identifier of the chat to which the poll belongs.
         */
        protected int $chatId,
        /**
         * Identifier of the message containing the poll.
         */
        protected int $messageId,
        /**
         * 0-based identifier of the answer option.
         */
        protected int $optionId,
        /**
         * Number of voters to skip in the result; must be non-negative.
         */
        protected int $offset,
        /**
         * The maximum number of voters to be returned; must be positive and can't be greater than 50. For optimal performance, the number of returned voters is chosen by TDLib and can be smaller than the specified limit, even if the end of the voter list has not been reached.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): GetPollVoters
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['option_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getOptionId(): int
    {
        return $this->optionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'option_id'  => $this->optionId,
            'offset'     => $this->offset,
            'limit'      => $this->limit,
        ];
    }
}
