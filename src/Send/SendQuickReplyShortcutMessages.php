<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends messages from a quick reply shortcut. Requires Telegram Business subscription.
 */
class SendQuickReplyShortcutMessages extends TdFunction
{
    public const TYPE_NAME = 'sendQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Identifier of the chat to which to send messages. The chat must be a private chat with a regular user.
         */
        protected int $chatId,
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int $shortcutId,
        /**
         * Non-persistent identifier, which will be returned back in messageSendingStatePending object and can be used to match sent messages and corresponding updateNewMessage updates.
         */
        protected int $sendingId,
    ) {}

    public static function fromArray(array $array): SendQuickReplyShortcutMessages
    {
        return new static(
            $array['chat_id'],
            $array['shortcut_id'],
            $array['sending_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'shortcut_id' => $this->shortcutId,
            'sending_id'  => $this->sendingId,
        ];
    }
}
