<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends messages from a quick reply shortcut. Requires Telegram Business subscription. Can't be used to send paid messages.
 */
class SendQuickReplyShortcutMessages extends TdFunction
{
    public const string TYPE_NAME = 'sendQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Identifier of the chat to which to send messages. The chat must be a private chat with a regular user.
         */
        protected int $chatId,
        /**
         * Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
         */
        protected int $sendingId,
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int $shortcutId,
    ) {}

    public static function fromArray(array $array): SendQuickReplyShortcutMessages
    {
        return new static(
            chatId    : $array['chat_id'],
            sendingId : $array['sending_id'],
            shortcutId: $array['shortcut_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSendingId(): int
    {
        return $this->sendingId;
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setSendingId(int $value): static
    {
        $this->sendingId = $value;

        return $this;
    }

    public function setShortcutId(int $value): static
    {
        $this->shortcutId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'sending_id'  => $this->sendingId,
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
