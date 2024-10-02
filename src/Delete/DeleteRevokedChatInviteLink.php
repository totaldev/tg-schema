<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes revoked chat invite links. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other
 * links.
 */
class DeleteRevokedChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'deleteRevokedChatInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Invite link to revoke.
         */
        protected string $inviteLink,
    ) {}

    public static function fromArray(array $array): DeleteRevokedChatInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'invite_link' => $this->inviteLink,
        ];
    }
}
