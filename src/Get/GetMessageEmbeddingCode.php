<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an HTML code for embedding the message. Available only for messages in supergroups and channels with a username
 */
class GetMessageEmbeddingCode extends TdFunction
{
    public const TYPE_NAME = 'getMessageEmbeddingCode';

    /**
     * Identifier of the chat to which the message belongs
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Pass true to return an HTML code for embedding of the whole media album
     *
     * @var bool
     */
    protected bool $forAlbum;

    /**
     * Identifier of the message
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId, bool $forAlbum)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->forAlbum = $forAlbum;
    }

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
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'for_album' => $this->forAlbum,
        ];
    }
}
