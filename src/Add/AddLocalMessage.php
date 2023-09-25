<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Message\MessageReplyTo;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a local message to a chat. The message is persistent across application restarts only if the message database is used. Returns the added message
 */
class AddLocalMessage extends TdFunction
{
    public const TYPE_NAME = 'addLocalMessage';

    /**
     * Target chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the sender of the message
     *
     * @var MessageSender
     */
    protected MessageSender $senderId;

    /**
     * Identifier of the replied message or story; pass null if none
     *
     * @var MessageReplyTo
     */
    protected MessageReplyTo $replyTo;

    /**
     * Pass true to disable notification for the message
     *
     * @var bool
     */
    protected bool $disableNotification;

    /**
     * The content of the message to be added
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    public function __construct(
        int $chatId,
        MessageSender $senderId,
        MessageReplyTo $replyTo,
        bool $disableNotification,
        InputMessageContent $inputMessageContent,
    ) {
        $this->chatId = $chatId;
        $this->senderId = $senderId;
        $this->replyTo = $replyTo;
        $this->disableNotification = $disableNotification;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): AddLocalMessage
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['sender_id']),
            TdSchemaRegistry::fromArray($array['reply_to']),
            $array['disable_notification'],
            TdSchemaRegistry::fromArray($array['input_message_content']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'sender_id' => $this->senderId->typeSerialize(),
            'reply_to' => $this->replyTo->typeSerialize(),
            'disable_notification' => $this->disableNotification,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getSenderId(): MessageSender
    {
        return $this->senderId;
    }

    public function getReplyTo(): MessageReplyTo
    {
        return $this->replyTo;
    }

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }
}
