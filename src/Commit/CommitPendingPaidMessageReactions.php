<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Commit;

use Totaldev\TgSchema\TdFunction;

/**
 * Applies all pending paid reactions on a message.
 */
class CommitPendingPaidMessageReactions extends TdFunction
{
    public const TYPE_NAME = 'commitPendingPaidMessageReactions';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int $chatId,
        /**
         * Identifier of the message.
         */
        protected int $messageId
    ) {}

    public static function fromArray(array $array): CommitPendingPaidMessageReactions
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }
}
