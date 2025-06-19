<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the slow mode delay of a chat. Available only for supergroups; requires can_restrict_members right.
 */
class SetChatSlowModeDelay extends TdFunction
{
    public const TYPE_NAME = 'setChatSlowModeDelay';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * New slow mode delay for the chat, in seconds; must be one of 0, 10, 30, 60, 300, 900, 3600.
         */
        protected int $slowModeDelay
    ) {}

    public static function fromArray(array $array): SetChatSlowModeDelay
    {
        return new static(
            $array['chat_id'],
            $array['slow_mode_delay'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSlowModeDelay(): int
    {
        return $this->slowModeDelay;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'slow_mode_delay' => $this->slowModeDelay,
        ];
    }
}
