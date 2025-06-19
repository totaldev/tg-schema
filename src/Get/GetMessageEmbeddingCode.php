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
    public const TYPE_NAME = 'getMessageEmbeddingCode';

    public function __construct(
        /**
         * Identifier of the chat to which the message belongs.
         */
        protected int  $chatId,
        /**
         * Identifier of the message.
         */
        protected int  $messageId,
        /**
         * Pass true to return an HTML code for embedding of the whole media album.
         */
        protected bool $forAlbum
    ) {}

    public static function fromArray(array $array): GetMessageEmbeddingCode
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['for_album'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'for_album'  => $this->forAlbum,
        ];
    }
}
