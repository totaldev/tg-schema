<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Resend;

use Totaldev\TgSchema\Input\InputTextQuote;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Resends messages which failed to send. Can be called only for messages for which messageSendingStateFailed.can_retry is true and after specified in
 * messageSendingStateFailed.retry_after time passed. If a message is re-sent, the corresponding failed to send message is deleted. Returns the sent messages
 * in the same order as the message identifiers passed in message_ids. If a message can't be re-sent, null will be returned instead of the message.
 */
class ResendMessages extends TdFunction
{
    public const TYPE_NAME = 'resendMessages';

    public function __construct(
        /**
         * Identifier of the chat to send messages.
         */
        protected int            $chatId,
        /**
         * Identifiers of the messages to resend. Message identifiers must be in a strictly increasing order.
         *
         * @var int[]
         */
        protected array          $messageIds,
        /**
         * New manually chosen quote from the message to be replied; pass null if none. Ignored if more than one message is re-sent, or if messageSendingStateFailed.need_another_reply_quote == false.
         */
        protected InputTextQuote $quote,
        /**
         * The number of Telegram Stars the user agreed to pay to send the messages. Ignored if messageSendingStateFailed.required_paid_message_star_count == 0.
         */
        protected int            $paidMessageStarCount
    ) {}

    public static function fromArray(array $array): ResendMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            TdSchemaRegistry::fromArray($array['quote']),
            $array['paid_message_star_count'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getPaidMessageStarCount(): int
    {
        return $this->paidMessageStarCount;
    }

    public function getQuote(): InputTextQuote
    {
        return $this->quote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'chat_id'                 => $this->chatId,
            'message_ids'             => $this->messageIds,
            'quote'                   => $this->quote->typeSerialize(),
            'paid_message_star_count' => $this->paidMessageStarCount,
        ];
    }
}
