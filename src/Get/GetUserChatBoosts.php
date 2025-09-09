<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of boosts applied to a chat by a given user; requires administrator rights in the chat; for bots only.
 */
class GetUserChatBoosts extends TdFunction
{
    public const TYPE_NAME = 'getUserChatBoosts';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int $chatId,
        /**
         * Identifier of the user.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): GetUserChatBoosts
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }
}
