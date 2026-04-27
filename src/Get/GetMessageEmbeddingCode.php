<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTML code for embedding the message. Available only if messageProperties.can_get_embedding_code.
 */
class GetMessageEmbeddingCode extends TdFunction
{
    public const string TYPE_NAME = 'getMessageEmbeddingCode';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Pass true to return an HTML code for embedding of the whole media album.
         */
        protected bool $forAlbum,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): GetMessageEmbeddingCode
    {
        return new static(
            chatId   : $array['chat_id'],
            forAlbum : $array['for_album'],
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForAlbum(): bool
    {
        return $this->forAlbum;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setForAlbum(bool $value): static
    {
        $this->forAlbum = $value;

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
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'for_album'  => $this->forAlbum,
            'message_id' => $this->messageId,
        ];
    }
}
