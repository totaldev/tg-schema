<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Pin;

use Totaldev\TgSchema\TdFunction;

/**
 * Pins a message in a chat. A message can be pinned only if messageProperties.can_be_pinned.
 */
class PinChatMessage extends TdFunction
{
    public const TYPE_NAME = 'pinChatMessage';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int  $chatId,
        /**
         * Identifier of the new pinned message.
         */
        protected int  $messageId,
        /**
         * Pass true to disable notification about the pinned message. Notifications are always disabled in channels and private chats.
         */
        protected bool $disableNotification,
        /**
         * Pass true to pin the message only for self; private chats only.
         */
        protected bool $onlyForSelf,
    ) {}

    public static function fromArray(array $array): PinChatMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['disable_notification'],
            $array['only_for_self'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'message_id'           => $this->messageId,
            'disable_notification' => $this->disableNotification,
            'only_for_self'        => $this->onlyForSelf,
        ];
    }
}
