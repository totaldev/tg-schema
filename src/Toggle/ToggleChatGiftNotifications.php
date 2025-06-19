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
    public const TYPE_NAME = 'toggleChatGiftNotifications';

    public function __construct(
        /**
         * Identifier of the channel chat.
         */
        protected int  $chatId,
        /**
         * Pass true to enable notifications about new gifts owned by the channel chat; pass false to disable the notifications.
         */
        protected bool $areEnabled
    ) {}

    public static function fromArray(array $array): ToggleChatGiftNotifications
    {
        return new static(
            $array['chat_id'],
            $array['are_enabled'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'are_enabled' => $this->areEnabled,
        ];
    }
}
