<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Revoke;

use Totaldev\TgSchema\TdFunction;

/**
 * Revokes invite link for a group call. Requires groupCall.can_be_managed right for video chats or groupCall.is_owned otherwise.
 */
class RevokeGroupCallInviteLink extends TdFunction
{
    public const TYPE_NAME = 'revokeGroupCallInviteLink';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $groupCallId
    ) {}

    public static function fromArray(array $array): RevokeGroupCallInviteLink
    {
        return new static(
            $array['group_call_id'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
        ];
    }
}
