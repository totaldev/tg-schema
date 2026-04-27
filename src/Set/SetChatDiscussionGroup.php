<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the discussion group of a channel chat; requires can_change_info administrator right in the channel if it is specified.
 */
class SetChatDiscussionGroup extends TdFunction
{
    public const string TYPE_NAME = 'setChatDiscussionGroup';

    public function __construct(
        /**
         * Identifier of the channel chat. Pass 0 to remove a link from the supergroup passed in the second argument to a linked channel chat (requires can_pin_messages member right in the supergroup).
         */
        protected int $chatId,
        /**
         * Identifier of a new channel's discussion group. Use 0 to remove the discussion group. Use the method getSuitableDiscussionChats to find all suitable groups. Basic group chats must be first upgraded to supergroup chats. If new chat members don't have access to old messages in the supergroup, then toggleSupergroupIsAllHistoryAvailable must be used first to change that.
         */
        protected int $discussionChatId,
    ) {}

    public static function fromArray(array $array): SetChatDiscussionGroup
    {
        return new static(
            chatId          : $array['chat_id'],
            discussionChatId: $array['discussion_chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDiscussionChatId(): int
    {
        return $this->discussionChatId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDiscussionChatId(int $value): static
    {
        $this->discussionChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'discussion_chat_id' => $this->discussionChatId,
        ];
    }
}
