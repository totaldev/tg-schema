<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns detailed statistics about a message. Can be used only if messageProperties.can_get_statistics == true.
 */
class GetMessageStatistics extends TdFunction
{
    public const string TYPE_NAME = 'getMessageStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark,
        /**
         * Message identifier.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): GetMessageStatistics
    {
        return new static(
            chatId   : $array['chat_id'],
            isDark   : $array['is_dark'],
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsDark(): bool
    {
        return $this->isDark;
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

    public function setIsDark(bool $value): static
    {
        $this->isDark = $value;

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
            'is_dark'    => $this->isDark,
            'message_id' => $this->messageId,
        ];
    }
}
