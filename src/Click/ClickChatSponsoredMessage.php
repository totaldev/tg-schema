<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Click;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that the user opened the sponsored chat via the button, the name, the photo, or a mention in the sponsored message.
 */
class ClickChatSponsoredMessage extends TdFunction
{
    public const TYPE_NAME = 'clickChatSponsoredMessage';

    public function __construct(
        /**
         * Chat identifier of the sponsored message.
         */
        protected int $chatId,
        /**
         * Identifier of the sponsored message.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): ClickChatSponsoredMessage
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
