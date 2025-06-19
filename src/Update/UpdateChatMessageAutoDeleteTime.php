<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The message auto-delete or self-destruct timer setting for a chat was changed.
 */
class UpdateChatMessageAutoDeleteTime extends Update
{
    public const TYPE_NAME = 'updateChatMessageAutoDeleteTime';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * New value of message_auto_delete_time.
         */
        protected int $messageAutoDeleteTime
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatMessageAutoDeleteTime
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
