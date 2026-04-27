<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Pauses or resumes the connected business bot in a specific chat.
 */
class ToggleBusinessConnectedBotChatIsPaused extends TdFunction
{
    public const string TYPE_NAME = 'toggleBusinessConnectedBotChatIsPaused';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true to pause the connected bot in the chat; pass false to resume the bot.
         */
        protected bool $isPaused,
    ) {}

    public static function fromArray(array $array): ToggleBusinessConnectedBotChatIsPaused
    {
        return new static(
            chatId  : $array['chat_id'],
            isPaused: $array['is_paused'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setIsPaused(bool $value): static
    {
        $this->isPaused = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'is_paused' => $this->isPaused,
        ];
    }
}
