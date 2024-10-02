<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatInviteLinkMember;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns chat members joined a chat via an invite link. Requires administrator privileges and can_invite_users right in the chat for own links and owner
 * privileges for other links.
 */
class GetChatInviteLinkMembers extends TdFunction
{
    public const TYPE_NAME = 'getChatInviteLinkMembers';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                  $chatId,
        /**
         * Invite link for which to return chat members.
         */
        protected string               $inviteLink,
        /**
         * Pass true if the link is a subscription link and only members with expired subscription must be returned.
         */
        protected bool                 $onlyWithExpiredSubscription,
        /**
         * A chat member from which to return next chat members; pass null to get results from the beginning.
         */
        protected ChatInviteLinkMember $offsetMember,
        /**
         * The maximum number of chat members to return; up to 100.
         */
        protected int                  $limit,
    ) {}

    public static function fromArray(array $array): GetChatInviteLinkMembers
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
            $array['only_with_expired_subscription'],
            TdSchemaRegistry::fromArray($array['offset_member']),
            $array['limit'],
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

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetMember(): ChatInviteLinkMember
    {
        return $this->offsetMember;
    }

    public function getOnlyWithExpiredSubscription(): bool
    {
        return $this->onlyWithExpiredSubscription;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'chat_id'                        => $this->chatId,
            'invite_link'                    => $this->inviteLink,
            'only_with_expired_subscription' => $this->onlyWithExpiredSubscription,
            'offset_member'                  => $this->offsetMember->typeSerialize(),
            'limit'                          => $this->limit,
        ];
    }
}
