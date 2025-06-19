<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was originally sent on behalf of a chat.
 */
class MessageOriginChat extends MessageOrigin
{
    public const TYPE_NAME = 'messageOriginChat';

    public function __construct(
        /**
         * Identifier of the chat that originally sent the message.
         */
        protected int    $senderChatId,
        /**
         * For messages originally sent by an anonymous chat administrator, original message author signature.
         */
        protected string $authorSignature
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginChat
    {
        return new static(
            $array['sender_chat_id'],
            $array['author_signature'],
        );
    }

    public function getAuthorSignature(): string
    {
        return $this->authorSignature;
    }

    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'sender_chat_id'   => $this->senderChatId,
            'author_signature' => $this->authorSignature,
        ];
    }
}
