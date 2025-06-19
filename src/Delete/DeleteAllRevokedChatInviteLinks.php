<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes all revoked chat invite links created by a given chat administrator. Requires administrator privileges and can_invite_users right in the chat for
 * own links and owner privileges for other links.
 */
class DeleteAllRevokedChatInviteLinks extends TdFunction
{
    public const TYPE_NAME = 'deleteAllRevokedChatInviteLinks';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int $chatId,
        /**
         * User identifier of a chat administrator, which links will be deleted. Must be an identifier of the current user for non-owner.
         */
        protected int $creatorUserId
    ) {}

    public static function fromArray(array $array): DeleteAllRevokedChatInviteLinks
    {
        return new static(
            $array['chat_id'],
            $array['creator_user_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreatorUserId(): int
    {
        return $this->creatorUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'creator_user_id' => $this->creatorUserId,
        ];
    }
}
