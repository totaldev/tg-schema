<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Stop;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Stops a poll.
 */
class StopPoll extends TdFunction
{
    public const TYPE_NAME = 'stopPoll';

    public function __construct(
        /**
         * Identifier of the chat to which the poll belongs.
         */
        protected int         $chatId,
        /**
         * Identifier of the message containing the poll. Use messageProperties.can_be_edited to check whether the poll can be stopped.
         */
        protected int         $messageId,
        /**
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ReplyMarkup $replyMarkup,
    ) {}

    public static function fromArray(array $array): StopPoll
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
        ];
    }
}
