<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Click;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a message with an animated emoji was clicked by the user. Returns a big animated sticker to be played or a 404 error if usual animation
 * needs to be played.
 */
class ClickAnimatedEmojiMessage extends TdFunction
{
    public const TYPE_NAME = 'clickAnimatedEmojiMessage';

    public function __construct(
        /**
         * Chat identifier of the message.
         */
        protected int $chatId,
        /**
         * Identifier of the clicked message.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): ClickAnimatedEmojiMessage
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
