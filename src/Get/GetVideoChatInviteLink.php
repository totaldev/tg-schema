<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns invite link to a video chat in a public chat.
 */
class GetVideoChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'getVideoChatInviteLink';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
        /**
         * Pass true if the invite link needs to contain an invite hash, passing which to joinVideoChat would allow the invited user to unmute themselves. Requires groupCall.can_be_managed right.
         */
        protected bool $canSelfUnmute
    ) {}

    public static function fromArray(array $array): GetVideoChatInviteLink
    {
        return new static(
            $array['group_call_id'],
            $array['can_self_unmute'],
        );
    }

    public function getCanSelfUnmute(): bool
    {
        return $this->canSelfUnmute;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'group_call_id'   => $this->groupCallId,
            'can_self_unmute' => $this->canSelfUnmute,
        ];
    }
}
