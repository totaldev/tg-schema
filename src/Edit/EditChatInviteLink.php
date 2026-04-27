<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Edits a non-primary invite link for a chat. Available for basic groups, supergroups, and channels. If the link creates a subscription, then expiration_date,
 * member_limit and creates_join_request must not be used. Requires administrator privileges and can_invite_users right in the chat for own links and owner
 * privileges for other links.
 */
class EditChatInviteLink extends TdFunction
{
    public const string TYPE_NAME = 'editChatInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Pass true if users joining the chat via the link need to be approved by chat administrators. In this case, member_limit must be 0.
         */
        protected bool   $createsJoinRequest,
        /**
         * Point in time (Unix timestamp) when the link will expire; pass 0 if never.
         */
        protected int    $expirationDate,
        /**
         * Invite link to be edited.
         */
        protected string $inviteLink,
        /**
         * The maximum number of chat members that can join the chat via the link simultaneously; 0-99999; pass 0 if not limited.
         */
        protected int    $memberLimit,
        /**
         * Invite link name; 0-32 characters.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): EditChatInviteLink
    {
        return new static(
            chatId            : $array['chat_id'],
            createsJoinRequest: $array['creates_join_request'],
            expirationDate    : $array['expiration_date'],
            inviteLink        : $array['invite_link'],
            memberLimit       : $array['member_limit'],
            name              : $array['name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getMemberLimit(): int
    {
        return $this->memberLimit;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCreatesJoinRequest(bool $value): static
    {
        $this->createsJoinRequest = $value;

        return $this;
    }

    public function setExpirationDate(int $value): static
    {
        $this->expirationDate = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setMemberLimit(int $value): static
    {
        $this->memberLimit = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'chat_id'              => $this->chatId,
            'creates_join_request' => $this->createsJoinRequest,
            'expiration_date'      => $this->expirationDate,
            'invite_link'          => $this->inviteLink,
            'member_limit'         => $this->memberLimit,
            'name'                 => $this->name,
        ];
    }
}
