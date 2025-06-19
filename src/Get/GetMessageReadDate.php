<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns read date of a recent outgoing message in a private chat. The method can be called if messageProperties.can_get_read_date == true.
 */
class GetMessageReadDate extends TdFunction
{
    public const TYPE_NAME = 'getMessageReadDate';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): GetMessageReadDate
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
