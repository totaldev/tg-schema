<?php

//declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Message\MessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a message. Returns the sent message
 */
class SendMessage extends TdFunction
{
    public const TYPE_NAME = 'sendMessage';

    public function __construct(
        /** Target chat */
        protected int $chatId,
        /** The content of the message to be sent */
        protected InputMessageContent $inputMessageContent,
        /** If not 0, a message thread identifier in which the message will be sent */
        protected int $messageThreadId = 0,
        /** Identifier of the replied message or story; pass null if none */
        protected MessageReplyTo|null $replyTo = null,
        /** Options to be used to send the message; pass null to use default options */
        protected MessageSendOptions|null $options = null,
        /** Markup for replying to the message; pass null if none; for bots only */
        protected ReplyMarkup|null $replyMarkup = null,
    ) {
    }

    public static function fromArray(array $array): SendMessage
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['options']),
            TdSchemaRegistry::fromArray($array['reply_markup']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
            'message_thread_id' => $this->messageThreadId,
            'reply_to' => $this->replyTo?->typeSerialize(),
            'options' => $this->options?->typeSerialize(),
            'reply_markup' => $this->replyMarkup?->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getReplyTo(): MessageReplyTo
    {
        return $this->replyTo;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
