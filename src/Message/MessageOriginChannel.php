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
    public const TYPE_NAME = 'messageOriginChannel';

    public function __construct(
        /**
         * Identifier of the channel chat to which the message was originally sent.
         */
        protected int    $chatId,
        /**
         * Message identifier of the original message.
         */
        protected int    $messageId,
        /**
         * Original post author signature.
         */
        protected string $authorSignature,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginChannel
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['author_signature'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'author_signature' => $this->authorSignature,
        ];
    }
}
