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
    public const TYPE_NAME = 'getMessageStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Message identifier.
         */
        protected int  $messageId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark
    ) {}

    public static function fromArray(array $array): GetMessageStatistics
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['is_dark'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'is_dark'    => $this->isDark,
        ];
    }
}
