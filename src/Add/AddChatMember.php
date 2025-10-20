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
    public const TYPE_NAME = 'addChatMember';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * Identifier of the user.
         */
        protected int $userId,
        /**
         * The number of earlier messages from the chat to be forwarded to the new member; up to 100. Ignored for supergroups and channels, or if the added user is a bot.
         */
        protected int $forwardLimit,
    ) {}

    public static function fromArray(array $array): AddChatMember
    {
        return new static(
            $array['chat_id'],
            $array['user_id'],
            $array['forward_limit'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'user_id'       => $this->userId,
            'forward_limit' => $this->forwardLimit,
        ];
    }
}
