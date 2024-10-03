<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageContent;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The message content has changed.
 */
class UpdateMessageContent extends Update
{
    public const TYPE_NAME = 'updateMessageContent';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int            $chatId,
        /**
         * Message identifier.
         */
        protected int            $messageId,
        /**
         * New message content.
         */
        protected MessageContent $newContent,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageContent
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['new_content']),
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

    public function getNewContent(): MessageContent
    {
        return $this->newContent;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'message_id'  => $this->messageId,
            'new_content' => $this->newContent->typeSerialize(),
        ];
    }
}
