<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all messages in the chat. Use chat.can_be_deleted_only_for_self and chat.can_be_deleted_for_all_users fields to find whether and how the method can
 * be applied to the chat.
 */
class DeleteChatHistory extends TdFunction
{
    public const TYPE_NAME = 'deleteChatHistory';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true to remove the chat from all chat lists.
         */
        protected bool $removeFromChatList,
        /**
         * Pass true to delete chat history for all users.
         */
        protected bool $revoke,
    ) {}

    public static function fromArray(array $array): DeleteChatHistory
    {
        return new static(
            $array['chat_id'],
            $array['remove_from_chat_list'],
            $array['revoke'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRemoveFromChatList(): bool
    {
        return $this->removeFromChatList;
    }

    public function getRevoke(): bool
    {
        return $this->revoke;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'chat_id'               => $this->chatId,
            'remove_from_chat_list' => $this->removeFromChatList,
            'revoke'                => $this->revoke,
        ];
    }
}
