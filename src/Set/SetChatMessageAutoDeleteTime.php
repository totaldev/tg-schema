<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the message auto-delete or self-destruct (for secret chats) time in a chat. Requires change_info administrator right in basic groups, supergroups
 * and channels. Message auto-delete time can't be changed in a chat with the current user (Saved Messages) and the chat 777000 (Telegram).
 */
class SetChatMessageAutoDeleteTime extends TdFunction
{
    public const TYPE_NAME = 'setChatMessageAutoDeleteTime';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * New time value, in seconds; unless the chat is secret, it must be from 0 up to 365 * 86400 and be divisible by 86400. If 0, then messages aren't deleted automatically.
         */
        protected int $messageAutoDeleteTime,
    ) {}

    public static function fromArray(array $array): SetChatMessageAutoDeleteTime
    {
        return new static(
            $array['chat_id'],
            $array['message_auto_delete_time'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'chat_id'                  => $this->chatId,
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
        ];
    }
}
