<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes a chat along with all messages in the corresponding chat for all chat members. For group chats this will release the usernames and remove all
 * members. Use the field chat.can_be_deleted_for_all_users to find whether the method can be applied to the chat.
 */
class DeleteChat extends TdFunction
{
    public const TYPE_NAME = 'deleteChat';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): DeleteChat
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
