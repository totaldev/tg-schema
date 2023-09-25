<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The auto-delete or self-destruct timer for messages in the chat has been changed
 */
class MessageChatSetMessageAutoDeleteTime extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetMessageAutoDeleteTime';

    /**
     * If not 0, a user identifier, which default setting was automatically applied
     *
     * @var int
     */
    protected int $fromUserId;

    /**
     * New value auto-delete or self-destruct time, in seconds; 0 if disabled
     *
     * @var int
     */
    protected int $messageAutoDeleteTime;

    public function __construct(int $messageAutoDeleteTime, int $fromUserId)
    {
        parent::__construct();

        $this->messageAutoDeleteTime = $messageAutoDeleteTime;
        $this->fromUserId = $fromUserId;
    }

    public static function fromArray(array $array): MessageChatSetMessageAutoDeleteTime
    {
        return new static(
            $array['message_auto_delete_time'],
            $array['from_user_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_auto_delete_time' => $this->messageAutoDeleteTime,
            'from_user_id' => $this->fromUserId,
        ];
    }
}
