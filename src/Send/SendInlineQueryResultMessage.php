<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Message\MessageReplyTo;
use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends the result of an inline query as a message. Returns the sent message. Always clears a chat draft message
 */
class SendInlineQueryResultMessage extends TdFunction
{
    public const TYPE_NAME = 'sendInlineQueryResultMessage';

    /**
     * Target chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the message will be sent
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Identifier of the replied message or story; pass null if none
     *
     * @var MessageReplyTo
     */
    protected MessageReplyTo $replyTo;

    /**
     * Options to be used to send the message; pass null to use default options
     *
     * @var MessageSendOptions
     */
    protected MessageSendOptions $options;

    /**
     * Identifier of the inline query
     *
     * @var int
     */
    protected int $queryId;

    /**
     * Identifier of the inline query result
     *
     * @var string
     */
    protected string $resultId;

    /**
     * Pass true to hide the bot, via which the message is sent. Can be used only for bots getOption("animation_search_bot_username"), getOption("photo_search_bot_username"), and getOption("venue_search_bot_username")
     *
     * @var bool
     */
    protected bool $hideViaBot;

    public function __construct(
        int $chatId,
        int $messageThreadId,
        MessageReplyTo $replyTo,
        MessageSendOptions $options,
        int $queryId,
        string $resultId,
        bool $hideViaBot,
    ) {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->replyTo = $replyTo;
        $this->options = $options;
        $this->queryId = $queryId;
        $this->resultId = $resultId;
        $this->hideViaBot = $hideViaBot;
    }

    public static function fromArray(array $array): SendInlineQueryResultMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['options']),
            $array['query_id'],
            $array['result_id'],
            $array['hide_via_bot'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'reply_to' => $this->replyTo->typeSerialize(),
            'options' => $this->options->typeSerialize(),
            'query_id' => $this->queryId,
            'result_id' => $this->resultId,
            'hide_via_bot' => $this->hideViaBot,
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

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function getHideViaBot(): bool
    {
        return $this->hideViaBot;
    }
}
