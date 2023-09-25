<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Block;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Blocks an original sender of a message in the Replies chat
 */
class BlockMessageSenderFromReplies extends TdFunction
{
    public const TYPE_NAME = 'blockMessageSenderFromReplies';

    /**
     * Pass true to delete all messages from the same sender
     *
     * @var bool
     */
    protected bool $deleteAllMessages;

    /**
     * Pass true to delete the message
     *
     * @var bool
     */
    protected bool $deleteMessage;

    /**
     * The identifier of an incoming message in the Replies chat
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Pass true to report the sender to the Telegram moderators
     *
     * @var bool
     */
    protected bool $reportSpam;

    public function __construct(int $messageId, bool $deleteMessage, bool $deleteAllMessages, bool $reportSpam)
    {
        $this->messageId = $messageId;
        $this->deleteMessage = $deleteMessage;
        $this->deleteAllMessages = $deleteAllMessages;
        $this->reportSpam = $reportSpam;
    }

    public static function fromArray(array $array): BlockMessageSenderFromReplies
    {
        return new static(
            $array['message_id'],
            $array['delete_message'],
            $array['delete_all_messages'],
            $array['report_spam'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_id' => $this->messageId,
            'delete_message' => $this->deleteMessage,
            'delete_all_messages' => $this->deleteAllMessages,
            'report_spam' => $this->reportSpam,
        ];
    }
}
