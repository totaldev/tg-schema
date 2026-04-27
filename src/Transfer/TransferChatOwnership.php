<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transfer;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the owner of a chat; for basic groups, supergroups and channel chats only; requires owner privileges in the chat. Use the method
 * canTransferOwnership to check whether the ownership can be transferred from the current session.
 */
class TransferChatOwnership extends TdFunction
{
    public const string TYPE_NAME = 'transferChatOwnership';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * The 2-step verification password of the current user.
         */
        protected string $password,
        /**
         * Identifier of the user to which transfer the ownership. The ownership can't be transferred to a bot or to a deleted user.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): TransferChatOwnership
    {
        return new static(
            chatId  : $array['chat_id'],
            password: $array['password'],
            userId  : $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'password' => $this->password,
            'user_id'  => $this->userId,
        ];
    }
}
