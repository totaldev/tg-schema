<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a newest pinned message in the chat. Returns a 404 error if the message doesn't exist.
 */
class GetChatPinnedMessage extends TdFunction
{
    public const TYPE_NAME = 'getChatPinnedMessage';

    public function __construct(
        /**
         * Identifier of the chat the message belongs to.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatPinnedMessage
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
