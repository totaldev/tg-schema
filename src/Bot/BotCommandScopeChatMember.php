<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Bot;

/**
 * A scope covering a member of a chat.
 */
class BotCommandScopeChatMember extends BotCommandScope
{
    public const string TYPE_NAME = 'botCommandScopeChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BotCommandScopeChatMember
    {
        return new static(
            chatId: $array['chat_id'],
            userId: $array['user_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

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
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'user_id' => $this->userId,
        ];
    }
}
