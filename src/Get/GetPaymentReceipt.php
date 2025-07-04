<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a successful payment.
 */
class GetPaymentReceipt extends TdFunction
{
    public const TYPE_NAME = 'getPaymentReceipt';

    public function __construct(
        /**
         * Chat identifier of the messagePaymentSuccessful message.
         */
        protected int $chatId,
        /**
         * Message identifier.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): GetPaymentReceipt
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
