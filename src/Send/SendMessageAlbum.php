<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends 2-10 messages grouped together into an album. Currently, only audio, document, photo and video messages can be grouped into an album. Documents and audio files can be only grouped in an album with messages of the same type. Returns sent messages
 */
class SendMessageAlbum extends TdFunction
{
    public const TYPE_NAME = 'sendMessageAlbum';

    /**
     * Target chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the messages will be sent
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
     * Options to be used to send the messages; pass null to use default options
     *
     * @var MessageSendOptions
     */
    protected MessageSendOptions $options;

    /**
     * Contents of messages to be sent. At most 10 messages can be added to an album
     *
     * @var InputMessageContent[]
     */
    protected array $inputMessageContents;

    /**
     * Pass true to get fake messages instead of actually sending them
     *
     * @var bool
     */
    protected bool $onlyPreview;

    public function __construct(
        int $chatId,
        int $messageThreadId,
        MessageReplyTo $replyTo,
        MessageSendOptions $options,
        array $inputMessageContents,
        bool $onlyPreview,
    ) {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->replyTo = $replyTo;
        $this->options = $options;
        $this->inputMessageContents = $inputMessageContents;
        $this->onlyPreview = $onlyPreview;
    }

    public static function fromArray(array $array): SendMessageAlbum
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            TdSchemaRegistry::fromArray($array['options']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['inputMessageContents']),
            $array['only_preview'],
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
            array_map(fn($x) => $x->typeSerialize(), $this->inputMessageContents),
            'only_preview' => $this->onlyPreview,
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

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }

    public function getOnlyPreview(): bool
    {
        return $this->onlyPreview;
    }
}
