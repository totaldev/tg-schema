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
    public const string TYPE_NAME = 'declineSuggestedPost';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int    $chatId,
        /**
         * Comment for the creator of the suggested post; 0-128 characters.
         */
        protected string $comment,
        /**
         * Identifier of the message with the suggested post. Use messageProperties.can_be_declined to check whether the suggested post can be declined.
         */
        protected int    $messageId,
    ) {}

    public static function fromArray(array $array): DeclineSuggestedPost
    {
        return new static(
            chatId   : $array['chat_id'],
            comment  : $array['comment'],
            messageId: $array['message_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setComment(string $value): static
    {
        $this->comment = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'comment'    => $this->comment,
            'message_id' => $this->messageId,
        ];
    }
}
