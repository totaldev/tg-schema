<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Forward;

use Totaldev\TgSchema\Message\MessageSendOptions;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Forwards previously sent messages. Returns the forwarded messages in the same order as the message identifiers passed in message_ids. If a message can't be forwarded, null will be returned instead of the message
 */
class ForwardMessages extends TdFunction
{
    public const TYPE_NAME = 'forwardMessages';

    /**
     * Identifier of the chat to which to forward messages
     *
     * @var int
     */
    protected int $chatId;

    /**
     * If not 0, a message thread identifier in which the message will be sent; for forum threads only
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Identifier of the chat from which to forward messages
     *
     * @var int
     */
    protected int $fromChatId;

    /**
     * Identifiers of the messages to forward. Message identifiers must be in a strictly increasing order. At most 100 messages can be forwarded simultaneously
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * Options to be used to send the messages; pass null to use default options
     *
     * @var MessageSendOptions
     */
    protected MessageSendOptions $options;

    /**
     * Pass true to copy content of the messages without reference to the original sender. Always true if the messages are forwarded to a secret chat or are local
     *
     * @var bool
     */
    protected bool $sendCopy;

    /**
     * Pass true to remove media captions of message copies. Ignored if send_copy is false
     *
     * @var bool
     */
    protected bool $removeCaption;

    /**
     * Pass true to get fake messages instead of actually forwarding them
     *
     * @var bool
     */
    protected bool $onlyPreview;

    public function __construct(
        int $chatId,
        int $messageThreadId,
        int $fromChatId,
        array $messageIds,
        MessageSendOptions $options,
        bool $sendCopy,
        bool $removeCaption,
        bool $onlyPreview,
    ) {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->fromChatId = $fromChatId;
        $this->messageIds = $messageIds;
        $this->options = $options;
        $this->sendCopy = $sendCopy;
        $this->removeCaption = $removeCaption;
        $this->onlyPreview = $onlyPreview;
    }

    public static function fromArray(array $array): ForwardMessages
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['from_chat_id'],
            $array['message_ids'],
            TdSchemaRegistry::fromArray($array['options']),
            $array['send_copy'],
            $array['remove_caption'],
            $array['only_preview'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'from_chat_id' => $this->fromChatId,
            'message_ids' => $this->messageIds,
            'options' => $this->options->typeSerialize(),
            'send_copy' => $this->sendCopy,
            'remove_caption' => $this->removeCaption,
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

    public function getFromChatId(): int
    {
        return $this->fromChatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getOptions(): MessageSendOptions
    {
        return $this->options;
    }

    public function getSendCopy(): bool
    {
        return $this->sendCopy;
    }

    public function getRemoveCaption(): bool
    {
        return $this->removeCaption;
    }

    public function getOnlyPreview(): bool
    {
        return $this->onlyPreview;
    }
}
