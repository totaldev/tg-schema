<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes the default reply markup from a chat. Must be called after a one-time keyboard or a replyMarkupForceReply reply markup has been used. An
 * updateChatReplyMarkup update will be sent if the reply markup is changed.
 */
class DeleteChatReplyMarkup extends TdFunction
{
    public const TYPE_NAME = 'deleteChatReplyMarkup';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The message identifier of the used keyboard.
         */
        protected int $messageId,
    ) {}

    public static function fromArray(array $array): DeleteChatReplyMarkup
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
