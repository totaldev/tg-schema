<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The auto-delete or self-destruct timer for messages in the chat has been changed.
 */
class MessageChatSetMessageAutoDeleteTime extends MessageContent
{
    public const string TYPE_NAME = 'messageChatSetMessageAutoDeleteTime';

    public function __construct(
        /**
         * If not 0, a user identifier, which default setting was automatically applied.
         */
        protected int $fromUserId,
        /**
         * New value auto-delete or self-destruct time, in seconds; 0 if disabled.
         */
        protected int $messageAutoDeleteTime,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatSetMessageAutoDeleteTime
    {
        return new static(
            fromUserId           : $array['from_user_id'],
            messageAutoDeleteTime: $array['message_auto_delete_time'],
        );
    }

    public function getFromUserId(): int
    {
        return $this->fromUserId;
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }

    public function setFromUserId(int $value): static
    {
        $this->fromUserId = $value;

        return $this;
    }

    public function setMessageAutoDeleteTime(int $value): static
    {
        $this->messageAutoDeleteTime = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'from_user_id'             => $this->fromUserId,
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
        ];
    }
}
