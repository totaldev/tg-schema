<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns detailed statistics about a chat. Currently, this method can be used only for supergroups and channels. Can be used only if
 * supergroupFullInfo.can_get_statistics == true.
 */
class GetChatStatistics extends TdFunction
{
    public const TYPE_NAME = 'getChatStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark
    ) {}

    public static function fromArray(array $array): GetChatStatistics
    {
        return new static(
            $array['chat_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'is_dark' => $this->isDark,
        ];
    }
}
