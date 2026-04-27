<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Approve;

use Totaldev\TgSchema\TdFunction;

/**
 * Approves a suggested post in a channel direct messages chat.
 */
class ApproveSuggestedPost extends TdFunction
{
    public const string TYPE_NAME = 'approveSuggestedPost';

    public function __construct(
        /**
         * Chat identifier of the channel direct messages chat.
         */
        protected int $chatId,
        /**
         * Identifier of the message with the suggested post. Use messageProperties.can_be_approved to check whether the suggested post can be approved.
         */
        protected int $messageId,
        /**
         * Point in time (Unix timestamp) when the post is expected to be published; pass 0 if the date has already been chosen. If specified, then the date must be in the future, but at most getOption("suggested_post_send_delay_max") seconds in the future.
         */
        protected int $sendDate,
    ) {}

    public static function fromArray(array $array): ApproveSuggestedPost
    {
        return new static(
            chatId   : $array['chat_id'],
            messageId: $array['message_id'],
            sendDate : $array['send_date'],
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

    public function getSendDate(): int
    {
        return $this->sendDate;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setSendDate(int $value): static
    {
        $this->sendDate = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'send_date'  => $this->sendDate,
        ];
    }
}
