<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a message thread
 */
class MessageThreadInfo extends TdObject
{
    public const TYPE_NAME = 'messageThreadInfo';

    /**
     * Identifier of the chat to which the message thread belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * A draft of a message in the message thread; may be null if none
     *
     * @var DraftMessage|null
     */
    protected ?DraftMessage $draftMessage;

    /**
     * Message thread identifier, unique within the chat
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * The messages from which the thread starts. The messages are returned in a reverse chronological order (i.e., in order of decreasing message_id)
     *
     * @var Message[]
     */
    protected array $messages;

    /**
     * Information about the message thread; may be null for forum topic threads
     *
     * @var MessageReplyInfo|null
     */
    protected ?MessageReplyInfo $replyInfo;

    /**
     * Approximate number of unread messages in the message thread
     *
     * @var int
     */
    protected int $unreadMessageCount;

    public function __construct(
        int               $chatId,
        int               $messageThreadId,
        ?MessageReplyInfo $replyInfo,
        int               $unreadMessageCount,
        array             $messages,
        ?DraftMessage     $draftMessage,
    )
    {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->replyInfo = $replyInfo;
        $this->unreadMessageCount = $unreadMessageCount;
        $this->messages = $messages;
        $this->draftMessage = $draftMessage;
    }

    public static function fromArray(array $array): MessageThreadInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            (isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null),
            $array['unread_message_count'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getMessages(): array
    {
        return $this->messages;
    }

    public function getReplyInfo(): ?MessageReplyInfo
    {
        return $this->replyInfo;
    }

    public function getUnreadMessageCount(): int
    {
        return $this->unreadMessageCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'reply_info' => (isset($this->replyInfo) ? $this->replyInfo : null),
            'unread_message_count' => $this->unreadMessageCount,
            array_map(fn($x) => $x->typeSerialize(), $this->messages),
            'draft_message' => (isset($this->draftMessage) ? $this->draftMessage : null),
        ];
    }
}
