<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the user who will become the owner of the chat after 7 days if the current user does not return to the supergroup or channel during that period or
 * immediately for basic groups; requires owner privileges in the chat. Available only for supergroups and channel chats.
 */
class GetChatOwnerAfterLeaving extends TdFunction
{
    public const string TYPE_NAME = 'getChatOwnerAfterLeaving';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetChatOwnerAfterLeaving
    {
        return new static(
            chatId: $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
