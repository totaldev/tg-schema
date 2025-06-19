<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a message. Returns the sent message.
 */
class SendMessage extends TdFunction
{
    public const TYPE_NAME = 'sendMessage';

    public function __construct(
        /**
         * Target chat.
         */
        protected int                 $chatId,
        /**
         * If not 0, the message thread identifier in which the message will be sent.
         */
        protected int                 $messageThreadId,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected InputMessageReplyTo $replyTo,
        /**
         * Options to be used to send the message; pass null to use default options.
         */
        protected MessageSendOptions  $options,
        /**
         * Markup for replying to the message; pass null if none; for bots only.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * The content of the message to be sent.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): SendMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['options']),
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'message_thread_id'     => $this->messageThreadId,
            'reply_to'              => $this->replyTo->typeSerialize(),
            'options'               => $this->options->typeSerialize(),
            'reply_markup'          => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
