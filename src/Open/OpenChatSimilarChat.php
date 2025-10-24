<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Open;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib that a chat was opened from the list of similar chats. The method is independent of openChat and closeChat methods.
 */
class OpenChatSimilarChat extends TdFunction
{
    public const string TYPE_NAME = 'openChatSimilarChat';

    public function __construct(
        /**
         * Identifier of the original chat, which similar chats were requested.
         */
        protected int $chatId,
        /**
         * Identifier of the opened chat.
         */
        protected int $openedChatId,
    ) {}

    public static function fromArray(array $array): OpenChatSimilarChat
    {
        return new static(
            $array['chat_id'],
            $array['opened_chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getOpenedChatId(): int
    {
        return $this->openedChatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setOpenedChatId(int $value): static
    {
        $this->openedChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'opened_chat_id' => $this->openedChatId,
        ];
    }
}
