<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was originally a post in a channel.
 */
class MessageOriginChannel extends MessageOrigin
{
    public const string TYPE_NAME = 'messageOriginChannel';

    public function __construct(
        /**
         * Original post author signature.
         */
        protected string $authorSignature,
        /**
         * Identifier of the channel chat to which the message was originally sent.
         */
        protected int    $chatId,
        /**
         * Message identifier of the original message.
         */
        protected int    $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginChannel
    {
        return new static(
            authorSignature: $array['author_signature'],
            chatId         : $array['chat_id'],
            messageId      : $array['message_id'],
        );
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setAuthorSignature(string $value): static
    {
        $this->authorSignature = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'author_signature' => $this->authorSignature,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
        ];
    }
}
