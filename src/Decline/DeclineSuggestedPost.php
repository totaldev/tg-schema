<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Decline;

use Totaldev\TgSchema\TdFunction;

/**
 * Declines a suggested post in a channel direct messages chat.
 */
class DeclineSuggestedPost extends TdFunction
{
    public const TYPE_NAME = 'declineSuggestedPost';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int    $chatId,
        /**
         * Identifier of the message with the suggested post. Use messageProperties.can_be_declined to check whether the suggested post can be declined.
         */
        protected int    $messageId,
        /**
         * Comment for the creator of the suggested post; 0-128 characters.
         */
        protected string $comment,
    ) {}

    public static function fromArray(array $array): DeclineSuggestedPost
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['comment'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getComment(): string
    {
        return $this->comment;
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
            'comment'    => $this->comment,
        ];
    }
}
