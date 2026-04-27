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
    public const string TYPE_NAME = 'addLocalMessage';

    public function __construct(
        /**
         * Target chat; channel direct messages chats aren't supported.
         */
        protected int                  $chatId,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                 $disableNotification,
        /**
         * The content of the message to be added.
         */
        protected InputMessageContent  $inputMessageContent,
        /**
         * Identifier of the sender of the message.
         */
        protected MessageSender        $senderId,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
    ) {}

    public static function fromArray(array $array): AddLocalMessage
    {
        return new static(
            chatId             : $array['chat_id'],
            disableNotification: $array['disable_notification'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyTo            : (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
            senderId           : TdSchemaRegistry::fromArray($array['sender_id']),
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

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDisableNotification(bool $value): static
    {
        $this->disableNotification = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setSenderId(MessageSender $value): static
    {
        $this->senderId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'disable_notification'  => $this->disableNotification,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_to'              => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
            'sender_id'             => $this->senderId->jsonSerialize(),
        ];
    }
}
