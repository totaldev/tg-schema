<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Checks whether a username can be set for a chat
 */
class CheckChatUsername extends TdFunction
{
    public const TYPE_NAME = 'checkChatUsername';

    /**
     * Chat identifier; must be identifier of a supergroup chat, or a channel chat, or a private chat with self, or 0 if the chat is being created
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Username to be checked
     *
     * @var string
     */
    protected string $username;

    public function __construct(int $chatId, string $username)
    {
        $this->chatId = $chatId;
        $this->username = $username;
    }

    public static function fromArray(array $array): CheckChatUsername
    {
        return new static(
            $array['chat_id'],
            $array['username'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'username' => $this->username,
        ];
    }
}
