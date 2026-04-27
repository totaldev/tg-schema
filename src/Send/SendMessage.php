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
    public const string TYPE_NAME = 'sendMessage';

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
         * Options to be used to send the message; pass null to use default options.
         */
        protected ?MessageSendOptions  $options = null,
        /**
         * Markup for replying to the message; pass null if none; for bots only.
         */
        protected ?ReplyMarkup         $replyMarkup = null,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
        /**
         * Topic in which the message will be sent; pass null if none.
         */
        protected ?MessageTopic        $topicId = null,
    ) {}

    public static function fromArray(array $array): SendMessage
    {
        return new static(
            chatId             : $array['chat_id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            options            : (isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            replyTo            : (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
            topicId            : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setOptions(?MessageSendOptions $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'options'               => (null !== $this->options ? $this->options->jsonSerialize() : null),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'reply_to'              => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
            'topic_id'              => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
