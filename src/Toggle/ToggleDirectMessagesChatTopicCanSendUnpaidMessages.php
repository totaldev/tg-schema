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
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Identifier of the topic.
         */
        protected int  $topicId,
        /**
         * Pass true to allow unpaid messages; pass false to disallow unpaid messages.
         */
        protected bool $canSendUnpaidMessages,
        /**
         * Pass true to refund the user previously paid messages.
         */
        protected bool $refundPayments,
    ) {}

    public static function fromArray(array $array): ToggleDirectMessagesChatTopicCanSendUnpaidMessages
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            $array['can_send_unpaid_messages'],
            $array['refund_payments'],
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
            'chat_id'                  => $this->chatId,
            'topic_id'                 => $this->topicId,
            'can_send_unpaid_messages' => $this->canSendUnpaidMessages,
            'refund_payments'          => $this->refundPayments,
        ];
    }
}
