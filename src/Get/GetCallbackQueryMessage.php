<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a message with the callback button that originated a callback query; for bots only.
 */
class GetCallbackQueryMessage extends TdFunction
{
    public const string TYPE_NAME = 'getCallbackQueryMessage';

    public function __construct(
        /**
         * Identifier of the callback query.
         */
        protected int $callbackQueryId,
        /**
         * Identifier of the chat the message belongs to.
         */
        protected int $chatId,
        /**
         * Message identifier.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): GetCallbackQueryMessage
    {
        return new static(
            callbackQueryId: $array['callback_query_id'],
            chatId         : $array['chat_id'],
            messageId      : $array['message_id'],
        );
    }

    public function getCallbackQueryId(): int
    {
        return $this->callbackQueryId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setCallbackQueryId(int $value): static
    {
        $this->callbackQueryId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'callback_query_id' => $this->callbackQueryId,
            'chat_id'           => $this->chatId,
            'message_id'        => $this->messageId,
        ];
    }
}
