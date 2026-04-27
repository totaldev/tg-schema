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
    public const string TYPE_NAME = 'messageOriginChat';

    public function __construct(
        /**
         * For messages originally sent by an anonymous chat administrator, original message author signature.
         */
        protected string $authorSignature,
        /**
         * Identifier of the chat that originally sent the message.
         */
        protected int    $senderChatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginChat
    {
        return new static(
            authorSignature: $array['author_signature'],
            senderChatId   : $array['sender_chat_id'],
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

    public function setAuthorSignature(string $value): static
    {
        $this->authorSignature = $value;

        return $this;
    }

    public function setSenderChatId(int $value): static
    {
        $this->senderChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'author_signature' => $this->authorSignature,
            'sender_chat_id'   => $this->senderChatId,
        ];
    }
}
