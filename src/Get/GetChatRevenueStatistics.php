<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns detailed revenue statistics about a chat. Currently, this method can be used only for channels if supergroupFullInfo.can_get_revenue_statistics ==
 * true.
 */
class GetChatRevenueStatistics extends TdFunction
{
    public const TYPE_NAME = 'getChatRevenueStatistics';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true if a dark theme is used by the application.
         */
        protected bool $isDark,
    ) {}

    public static function fromArray(array $array): GetChatRevenueStatistics
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
