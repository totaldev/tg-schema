<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a button of type inlineKeyboardButtonTypeLoginUrl. The method needs to be called when the user presses the button.
 */
class GetLoginUrlInfo extends TdFunction
{
    public const string TYPE_NAME = 'getLoginUrlInfo';

    public function __construct(
        /**
         * Button identifier.
         */
        protected int $buttonId,
        /**
         * Chat identifier of the message with the button.
         */
        protected int $chatId,
        /**
         * Message identifier of the message with the button. The message must not be scheduled.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): GetLoginUrlInfo
    {
        return new static(
            buttonId : $array['button_id'],
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

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
            '@type'      => static::TYPE_NAME,
            'button_id'  => $this->buttonId,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
