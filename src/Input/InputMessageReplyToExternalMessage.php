<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a message to be replied that is from a different chat or a forum topic; not supported in secret chats.
 */
class InputMessageReplyToExternalMessage extends InputMessageReplyTo
{
    public const TYPE_NAME = 'inputMessageReplyToExternalMessage';

    public function __construct(
        /**
         * The identifier of the chat to which the message to be replied belongs.
         */
        protected int            $chatId,
        /**
         * The identifier of the message to be replied in the specified chat. A message can be replied in another chat or forum topic only if messageProperties.can_be_replied_in_another_chat.
         */
        protected int            $messageId,
        /**
         * Quote from the message to be replied; pass null if none.
         */
        protected InputTextQuote $quote
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageReplyToExternalMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['quote']),
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

    public function getQuote(): InputTextQuote
    {
        return $this->quote;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'quote'      => $this->quote->typeSerialize(),
        ];
    }
}
