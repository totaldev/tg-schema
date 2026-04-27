<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Allows to send unpaid messages to the given topic of the channel direct messages chat administered by the current user.
 */
class ToggleDirectMessagesChatTopicCanSendUnpaidMessages extends TdFunction
{
    public const string TYPE_NAME = 'toggleDirectMessagesChatTopicCanSendUnpaidMessages';

    public function __construct(
        /**
         * Pass true to allow unpaid messages; pass false to disallow unpaid messages.
         */
        protected bool $canSendUnpaidMessages,
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true to refund the user previously paid messages.
         */
        protected bool $refundPayments,
        /**
         * Identifier of the topic.
         */
        protected int  $topicId,
    ) {}

    public static function fromArray(array $array): ToggleDirectMessagesChatTopicCanSendUnpaidMessages
    {
        return new static(
            canSendUnpaidMessages: $array['can_send_unpaid_messages'],
            chatId               : $array['chat_id'],
            refundPayments       : $array['refund_payments'],
            topicId              : $array['topic_id'],
        );
    }

    public function getCanSendUnpaidMessages(): bool
    {
        return $this->canSendUnpaidMessages;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRefundPayments(): bool
    {
        return $this->refundPayments;
    }

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function setCanSendUnpaidMessages(bool $value): static
    {
        $this->canSendUnpaidMessages = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setRefundPayments(bool $value): static
    {
        $this->refundPayments = $value;

        return $this;
    }

    public function setTopicId(int $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'can_send_unpaid_messages' => $this->canSendUnpaidMessages,
            'chat_id'                  => $this->chatId,
            'refund_payments'          => $this->refundPayments,
            'topic_id'                 => $this->topicId,
        ];
    }
}
