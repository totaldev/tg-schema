<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a local message to a chat. The message is persistent across application restarts only if the message database is used. Returns the added message.
 */
class AddLocalMessage extends TdFunction
{
    public const TYPE_NAME = 'addLocalMessage';

    public function __construct(
        /**
         * Target chat; channel direct messages chats aren't supported.
         */
        protected int                 $chatId,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender       $senderId,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected InputMessageReplyTo $replyTo,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                $disableNotification,
        /**
         * The content of the message to be added.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): AddLocalMessage
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['reply_to']),
            $array['disable_notification'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'sender_id'             => $this->senderId->typeSerialize(),
            'reply_to'              => $this->replyTo->typeSerialize(),
            'disable_notification'  => $this->disableNotification,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
