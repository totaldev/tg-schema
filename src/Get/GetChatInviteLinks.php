<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns invite links for a chat created by specified administrator. Requires administrator privileges and can_invite_users right in the chat to get own
 * links and owner privileges to get other links.
 */
class GetChatInviteLinks extends TdFunction
{
    public const string TYPE_NAME = 'getChatInviteLinks';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * User identifier of a chat administrator. Must be an identifier of the current user for non-owner.
         */
        protected int    $creatorUserId,
        /**
         * Pass true if revoked links needs to be returned instead of active or expired.
         */
        protected bool   $isRevoked,
        /**
         * The maximum number of invite links to return; up to 100.
         */
        protected int    $limit,
        /**
         * Creation date of an invite link starting after which to return invite links; use 0 to get results from the beginning.
         */
        protected int    $offsetDate,
        /**
         * Invite link starting after which to return invite links; use empty string to get results from the beginning.
         */
        protected string $offsetInviteLink,
    ) {}

    public static function fromArray(array $array): GetChatInviteLinks
    {
        return new static(
            chatId          : $array['chat_id'],
            creatorUserId   : $array['creator_user_id'],
            isRevoked       : $array['is_revoked'],
            limit           : $array['limit'],
            offsetDate      : $array['offset_date'],
            offsetInviteLink: $array['offset_invite_link'],
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

    public function getIsRevoked(): bool
    {
        return $this->isRevoked;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffsetDate(): int
    {
        return $this->offsetDate;
    }

    public function getOffsetInviteLink(): string
    {
        return $this->offsetInviteLink;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCreatorUserId(int $value): static
    {
        $this->creatorUserId = $value;

        return $this;
    }

    public function setIsRevoked(bool $value): static
    {
        $this->isRevoked = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffsetDate(int $value): static
    {
        $this->offsetDate = $value;

        return $this;
    }

    public function setOffsetInviteLink(string $value): static
    {
        $this->offsetInviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'chat_id'            => $this->chatId,
            'creator_user_id'    => $this->creatorUserId,
            'is_revoked'         => $this->isRevoked,
            'limit'              => $this->limit,
            'offset_date'        => $this->offsetDate,
            'offset_invite_link' => $this->offsetInviteLink,
        ];
    }
}
