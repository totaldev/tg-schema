<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a new member to a chat; requires can_invite_users member right. Members can't be added to private or secret chats. Returns information about members
 * that weren't added.
 */
class AddChatMember extends TdFunction
{
    public const string TYPE_NAME = 'addChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels, or if the added user is a bot.
         */
        protected int $forwardLimit,
        /**
         * Identifier of the user.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): AddChatMember
    {
        return new static(
            chatId      : $array['chat_id'],
            forwardLimit: $array['forward_limit'],
            userId      : $array['user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getForwardLimit(): int
    {
        return $this->forwardLimit;
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

    public function setForwardLimit(int $value): static
    {
        $this->forwardLimit = $value;

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
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'forward_limit' => $this->forwardLimit,
            'user_id'       => $this->userId,
        ];
    }
}
