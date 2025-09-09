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
    public const TYPE_NAME = 'getLoginUrlInfo';

    public function __construct(
        /**
         * Chat identifier of the message with the button.
         */
        protected int $chatId,
        /**
         * Message identifier of the message with the button. The message must not be scheduled.
         */
        protected int $messageId,
        /**
         * Button identifier.
         */
        protected int $buttonId,
    ) {}

    public static function fromArray(array $array): GetLoginUrlInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'button_id'  => $this->buttonId,
        ];
    }
}
