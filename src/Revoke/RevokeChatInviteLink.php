<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revoke;

use Totaldev\TgSchema\TdFunction;

/**
 * Revokes invite link for a chat. Available for basic groups, supergroups, and channels. Requires administrator privileges and can_invite_users right in the
 * chat for own links and owner privileges for other links. If a primary link is revoked, then additionally to the revoked link returns new primary link.
 */
class RevokeChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'revokeChatInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Invite link to be revoked.
         */
        protected string $inviteLink,
    ) {}

    public static function fromArray(array $array): RevokeChatInviteLink
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
