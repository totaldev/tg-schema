<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Callback\CallbackQueryPayload;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a callback query to a bot and returns an answer. Returns an error with code 502 if the bot fails to answer the query before the query timeout expires.
 */
class GetCallbackQueryAnswer extends TdFunction
{
    public const TYPE_NAME = 'getCallbackQueryAnswer';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int                  $chatId,
        /**
         * Identifier of the message from which the query originated. The message must not be scheduled.
         */
        protected int                  $messageId,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload
    ) {}

    public static function fromArray(array $array): GetCallbackQueryAnswer
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['payload']),
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

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'payload'    => $this->payload->typeSerialize(),
        ];
    }
}
