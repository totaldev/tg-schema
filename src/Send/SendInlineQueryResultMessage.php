<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends the result of an inline query as a message. Returns the sent message. Always clears a chat draft message.
 */
class SendInlineQueryResultMessage extends TdFunction
{
    public const TYPE_NAME = 'sendInlineQueryResultMessage';

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
         * Identifier of the inline query.
         */
        protected int                 $queryId,
        /**
         * Identifier of the inline query result.
         */
        protected string              $resultId,
        /**
         * Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username").
         */
        protected bool                $hideViaBot,
        /**
         * Options to be used to send the message; pass null to use default options.
         */
        protected ?MessageSendOptions $options = null,
    ) {}

    public static function fromArray(array $array): SendInlineQueryResultMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            isset($array['options']) ? TdSchemaRegistry::fromArray($array['options']) : null,
            $array['query_id'],
            $array['result_id'],
            $array['hide_via_bot'],
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

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getOptions(): ?MessageSendOptions
    {
        return $this->options;
    }

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'reply_to'          => $this->replyTo->typeSerialize(),
            'options'           => $this->options ?? null,
            'query_id'          => $this->queryId,
            'result_id'         => $this->resultId,
            'hide_via_bot'      => $this->hideViaBot,
        ];
    }
}
