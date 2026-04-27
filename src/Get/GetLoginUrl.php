<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTP URL which can be used to automatically authorize the user on a website after clicking an inline button of type
 * inlineKeyboardButtonTypeLoginUrl. Use the method getLoginUrlInfo to find whether a prior user confirmation is needed. If an error is returned, then the
 * button must be handled as an ordinary URL button.
 */
class GetLoginUrl extends TdFunction
{
    public const string TYPE_NAME = 'getLoginUrl';

    public function __construct(
        /**
         * Pass true to allow the bot to send messages to the current user. Phone number access can't be requested using the button.
         */
        protected bool $allowWriteAccess,
        /**
         * Button identifier.
         */
        protected int  $buttonId,
        /**
         * Chat identifier of the message with the button.
         */
        protected int  $chatId,
        /**
         * Message identifier of the message with the button.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): GetLoginUrl
    {
        return new static(
            allowWriteAccess: $array['allow_write_access'],
            buttonId        : $array['button_id'],
            chatId          : $array['chat_id'],
            messageId       : $array['message_id'],
        );
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
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

    public function setAllowWriteAccess(bool $value): static
    {
        $this->allowWriteAccess = $value;

        return $this;
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
            '@type'              => static::TYPE_NAME,
            'allow_write_access' => $this->allowWriteAccess,
            'button_id'          => $this->buttonId,
            'chat_id'            => $this->chatId,
            'message_id'         => $this->messageId,
        ];
    }
}
