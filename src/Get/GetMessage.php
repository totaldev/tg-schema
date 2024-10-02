<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a message.
 */
class GetMessage extends TdFunction
{
    public const TYPE_NAME = 'getMessage';

    public function __construct(
        /**
         * Identifier of the chat the message belongs to.
         */
        protected int $chatId,
        /**
         * Identifier of the message to get.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): GetMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
