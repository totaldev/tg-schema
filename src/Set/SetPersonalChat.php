<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the personal chat of the current user.
 */
class SetPersonalChat extends TdFunction
{
    public const TYPE_NAME = 'setPersonalChat';

    public function __construct(
        /**
         * Identifier of the new personal chat; pass 0 to remove the chat. Use getSuitablePersonalChats to get suitable chats.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): SetPersonalChat
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
