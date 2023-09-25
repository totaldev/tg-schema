<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Transfer;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the owner of a chat. The current user must be a current owner of the chat. Use the method canTransferOwnership to check whether the ownership can be
 * transferred from the current session. Available only for supergroups and channel chats
 */
class TransferChatOwnership extends TdFunction
{
    public const TYPE_NAME = 'transferChatOwnership';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * The 2-step verification password of the current user
     *
     * @var string
     */
    protected string $password;

    /**
     * Identifier of the user to which transfer the ownership. The ownership can't be transferred to a bot or to a deleted user
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $chatId, int $userId, string $password)
    {
        $this->chatId = $chatId;
        $this->userId = $userId;
        $this->password = $password;
    }

    public static function fromArray(array $array): TransferChatOwnership
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            $array['password'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
            'password' => $this->password,
        ];
    }
}
