<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a chat administrator with a number of active and revoked chat invite links.
 */
class ChatInviteLinkCount extends TdObject
{
    public const string TYPE_NAME = 'chatInviteLinkCount';

    public function __construct(
        /**
         * Number of active invite links.
         */
        protected int $inviteLinkCount,
        /**
         * Number of revoked invite links.
         */
        protected int $revokedInviteLinkCount,
        /**
         * Administrator's user identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): ChatInviteLinkCount
    {
        return new static(
            inviteLinkCount       : $array['invite_link_count'],
            revokedInviteLinkCount: $array['revoked_invite_link_count'],
            userId                : $array['user_id'],
        );
    }

    public function getInviteLinkCount(): int
    {
        return $this->inviteLinkCount;
    }

    public function getRevokedInviteLinkCount(): int
    {
        return $this->revokedInviteLinkCount;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setInviteLinkCount(int $value): static
    {
        $this->inviteLinkCount = $value;

        return $this;
    }

    public function setRevokedInviteLinkCount(int $value): static
    {
        $this->revokedInviteLinkCount = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'invite_link_count'         => $this->inviteLinkCount,
            'revoked_invite_link_count' => $this->revokedInviteLinkCount,
            'user_id'                   => $this->userId,
        ];
    }
}
