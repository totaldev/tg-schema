<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether notifications for new gifts received by a channel chat are sent to the current user; requires can_post_messages administrator right in the
 * chat.
 */
class ToggleChatGiftNotifications extends TdFunction
{
    public const string TYPE_NAME = 'toggleChatGiftNotifications';

    public function __construct(
        /**
         * Pass true to enable notifications about new gifts owned by the channel chat; pass false to disable the notifications.
         */
        protected bool $areEnabled,
        /**
         * Identifier of the channel chat.
         */
        protected int  $chatId,
    ) {}

    public static function fromArray(array $array): ToggleChatGiftNotifications
    {
        return new static(
            areEnabled: $array['are_enabled'],
            chatId    : $array['chat_id'],
        );
    }

    public function getAreEnabled(): bool
    {
        return $this->areEnabled;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setAreEnabled(bool $value): static
    {
        $this->areEnabled = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'are_enabled' => $this->areEnabled,
            'chat_id'     => $this->chatId,
        ];
    }
}
