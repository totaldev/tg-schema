<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns sponsored messages to be shown in a chat; for channel chats only.
 */
class GetChatSponsoredMessages extends TdFunction
{
    public const TYPE_NAME = 'getChatSponsoredMessages';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatSponsoredMessages
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
