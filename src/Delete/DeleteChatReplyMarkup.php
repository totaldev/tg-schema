<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes the default reply markup from a chat. Must be called after a one-time keyboard or a replyMarkupForceReply reply markup has been used or dismissed.
 */
class DeleteChatReplyMarkup extends TdFunction
{
    public const string TYPE_NAME = 'deleteChatReplyMarkup';

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
