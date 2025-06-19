<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The value of the default disable_notification parameter, used when a message is sent to the chat, was changed.
 */
class UpdateChatDefaultDisableNotification extends Update
{
    public const TYPE_NAME = 'updateChatDefaultDisableNotification';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * The new default_disable_notification value.
         */
        protected bool $defaultDisableNotification
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatDefaultDisableNotification
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
