<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Message\MessageTopic;
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
        protected int                  $chatId,
        /**
         * The content of the message to be sent.
         */
        protected InputMessageContent  $inputMessageContent,
        /**
         * Topic in which the message will be sent; pass null if none.
         */
        protected ?MessageTopic        $topicId = null,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
        /**
         * Options to be used to send the message; pass null to use default options.
         */
        protected ?MessageSendOptions  $options = null,
        /**
         * Markup for replying to the message; pass null if none; for bots only.
         */
        protected ?ReplyMarkup         $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): SendMessage
    {
        return new static(
            $array['chat_id'],
            isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null,
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
            isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null,
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
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

    public function getOptions(): ?MessageSendOptions
    {
        return $this->options;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'topic_id'              => $this->topicId ?? null,
            'reply_to'              => $this->replyTo ?? null,
            'options'               => $this->options ?? null,
            'reply_markup'          => $this->replyMarkup ?? null,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
