<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Block;

use Totaldev\TgSchema\TdFunction;

/**
 * Blocks an original sender of a message in the Replies chat.
 */
class BlockMessageSenderFromReplies extends TdFunction
{
    public const string TYPE_NAME = 'blockMessageSenderFromReplies';

    public function __construct(
        /**
         * Pass true to delete all messages from the same sender.
         */
        protected bool $deleteAllMessages,
        /**
         * Pass true to delete the message.
         */
        protected bool $deleteMessage,
        /**
         * The identifier of an incoming message in the Replies chat.
         */
        protected int  $messageId,
        /**
         * Pass true to report the sender to the Telegram moderators.
         */
        protected bool $reportSpam,
    ) {}

    public static function fromArray(array $array): BlockMessageSenderFromReplies
    {
        return new static(
            deleteAllMessages: $array['delete_all_messages'],
            deleteMessage    : $array['delete_message'],
            messageId        : $array['message_id'],
            reportSpam       : $array['report_spam'],
        );
    }

    public function getDeleteAllMessages(): bool
    {
        return $this->deleteAllMessages;
    }

    public function getDeleteMessage(): bool
    {
        return $this->deleteMessage;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReportSpam(): bool
    {
        return $this->reportSpam;
    }

    public function setDeleteAllMessages(bool $value): static
    {
        $this->deleteAllMessages = $value;

        return $this;
    }

    public function setDeleteMessage(bool $value): static
    {
        $this->deleteMessage = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReportSpam(bool $value): static
    {
        $this->reportSpam = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'delete_all_messages' => $this->deleteAllMessages,
            'delete_message'      => $this->deleteMessage,
            'message_id'          => $this->messageId,
            'report_spam'         => $this->reportSpam,
        ];
    }
}
