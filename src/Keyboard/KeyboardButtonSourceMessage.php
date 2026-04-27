<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Keyboard;

/**
 * The button is from a bot's message.
 */
class KeyboardButtonSourceMessage extends KeyboardButtonSource
{
    public const string TYPE_NAME = 'keyboardButtonSourceMessage';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int $chatId,
        /**
         * Identifier of the message with the button.
         */
        protected int $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): KeyboardButtonSourceMessage
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
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
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
