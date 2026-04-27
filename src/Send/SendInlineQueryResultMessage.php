<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends the result of an inline query as a message. Returns the sent message. Always clears a chat draft message.
 */
class SendInlineQueryResultMessage extends TdFunction
{
    public const string TYPE_NAME = 'sendInlineQueryResultMessage';

    public function __construct(
        /**
         * Target chat.
         */
        protected int                  $chatId,
        /**
         * Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username").
         */
        protected bool                 $hideViaBot,
        /**
         * Identifier of the inline query.
         */
        protected int                  $queryId,
        /**
         * Identifier of the inline query result.
         */
        protected string               $resultId,
        /**
         * Options to be used to send the message; pass null to use default options.
         */
        protected ?MessageSendOptions  $options = null,
        /**
         * Information about the message or story to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
        /**
         * Topic in which the message will be sent; pass null if none.
         */
        protected ?MessageTopic        $topicId = null,
    ) {}

    public static function fromArray(array $array): SendInlineQueryResultMessage
    {
        return new static(
            chatId    : $array['chat_id'],
            hideViaBot: $array['hide_via_bot'],
            options   : (isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null),
            queryId   : $array['query_id'],
            replyTo   : (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
            resultId  : $array['result_id'],
            topicId   : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }

    public function getOptions(): ?MessageSendOptions
    {
        return $this->options;
    }

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getResultId(): string
    {
        return $this->resultId;
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

    public function setHideViaBot(bool $value): static
    {
        $this->hideViaBot = $value;

        return $this;
    }

    public function setOptions(?MessageSendOptions $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function setQueryId(int $value): static
    {
        $this->queryId = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setResultId(string $value): static
    {
        $this->resultId = $value;

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
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'hide_via_bot' => $this->hideViaBot,
            'options'      => (null !== $this->options ? $this->options->jsonSerialize() : null),
            'query_id'     => $this->queryId,
            'reply_to'     => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
            'result_id'    => $this->resultId,
            'topic_id'     => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
