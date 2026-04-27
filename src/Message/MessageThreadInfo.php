<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a message thread.
 */
class MessageThreadInfo extends TdObject
{
    public const string TYPE_NAME = 'messageThreadInfo';

    public function __construct(
        /**
         * Identifier of the chat to which the message thread belongs.
         */
        protected int               $chatId,
        /**
         * A draft of a message in the message thread; may be null if none.
         */
        protected ?DraftMessage     $draftMessage,
        /**
         * The messages from which the thread starts. The messages are returned in reverse chronological order (i.e., in order of decreasing message_id).
         *
         * @var Message[]
         */
        protected array             $messages,
        /**
         * Message thread identifier, unique within the chat.
         */
        protected int               $messageThreadId,
        /**
         * Information about the message thread; may be null for forum topic threads.
         */
        protected ?MessageReplyInfo $replyInfo,
        /**
         * Approximate number of unread messages in the message thread.
         */
        protected int               $unreadMessageCount,
    ) {}

    public static function fromArray(array $array): MessageThreadInfo
    {
        return new static(
            chatId            : $array['chat_id'],
            draftMessage      : (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            messageThreadId   : $array['message_thread_id'],
            messages          : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['messages']),
            replyInfo         : (isset($array['reply_info']) ? TdSchemaRegistry::fromArray($array['reply_info']) : null),
            unreadMessageCount: $array['unread_message_count'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDraftMessage(?DraftMessage $value): static
    {
        $this->draftMessage = $value;

        return $this;
    }

    public function setMessageThreadId(int $value): static
    {
        $this->messageThreadId = $value;

        return $this;
    }

    public function setMessages(array $value): static
    {
        $this->messages = $value;

        return $this;
    }

    public function setReplyInfo(?MessageReplyInfo $value): static
    {
        $this->replyInfo = $value;

        return $this;
    }

    public function setUnreadMessageCount(int $value): static
    {
        $this->unreadMessageCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'draft_message'        => (null !== $this->draftMessage ? $this->draftMessage->jsonSerialize() : null),
            'message_thread_id'    => $this->messageThreadId,
            'messages'             => array_map(static fn($x) => $x->jsonSerialize(), $this->messages),
            'reply_info'           => (null !== $this->replyInfo ? $this->replyInfo->jsonSerialize() : null),
            'unread_message_count' => $this->unreadMessageCount,
        ];
    }
}
