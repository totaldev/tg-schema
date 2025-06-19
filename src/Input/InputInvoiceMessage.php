<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An invoice from a message of the type messageInvoice or paid media purchase from messagePaidMedia.
 */
class InputInvoiceMessage extends InputInvoice
{
    public const TYPE_NAME = 'inputInvoiceMessage';

    public function __construct(
        /**
         * Chat identifier of the message.
         */
        protected int $chatId,
        /**
         * Message identifier. Use messageProperties.can_be_paid to check whether the message can be used in the method.
         */
        protected int $messageId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInvoiceMessage
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
