<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the value of the default disable_notification parameter, used when a message is sent to a chat.
 */
class ToggleChatDefaultDisableNotification extends TdFunction
{
    public const TYPE_NAME = 'toggleChatDefaultDisableNotification';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * New value of default_disable_notification.
         */
        protected bool $defaultDisableNotification
    ) {}

    public static function fromArray(array $array): ToggleChatDefaultDisableNotification
    {
        return new static(
            $array['chat_id'],
            $array['default_disable_notification'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDefaultDisableNotification(): bool
    {
        return $this->defaultDisableNotification;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'chat_id'                      => $this->chatId,
            'default_disable_notification' => $this->defaultDisableNotification,
        ];
    }
}
