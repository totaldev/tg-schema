<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a chat administrator with a number of active and revoked chat invite links
 */
class ChatInviteLinkCount extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkCount';

    /**
     * Number of active invite links
     *
     * @var int
     */
    protected int $inviteLinkCount;

    /**
     * Number of revoked invite links
     *
     * @var int
     */
    protected int $revokedInviteLinkCount;

    /**
     * Administrator's user identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, int $inviteLinkCount, int $revokedInviteLinkCount)
    {
        $this->userId = $userId;
        $this->inviteLinkCount = $inviteLinkCount;
        $this->revokedInviteLinkCount = $revokedInviteLinkCount;
    }

    public static function fromArray(array $array): ChatInviteLinkCount
    {
        return new static(
            $array['user_id'],
            $array['invite_link_count'],
            $array['revoked_invite_link_count'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'invite_link_count' => $this->inviteLinkCount,
            'revoked_invite_link_count' => $this->revokedInviteLinkCount,
        ];
    }
}
