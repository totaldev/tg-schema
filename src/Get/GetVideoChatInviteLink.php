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
    public const string TYPE_NAME = 'getVideoChatInviteLink';

    public function __construct(
        /**
         * Pass true if the invite link needs to contain an invite hash, passing which to joinVideoChat would allow the invited user to unmute themselves. Requires groupCall.can_be_managed right.
         */
        protected bool $canSelfUnmute,
        /**
         * Group call identifier.
         */
        protected int  $groupCallId,
    ) {}

    public static function fromArray(array $array): GetVideoChatInviteLink
    {
        return new static(
            canSelfUnmute: $array['can_self_unmute'],
            groupCallId  : $array['group_call_id'],
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

    public function setCanSelfUnmute(bool $value): static
    {
        $this->canSelfUnmute = $value;

        return $this;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'can_self_unmute' => $this->canSelfUnmute,
            'group_call_id'   => $this->groupCallId,
        ];
    }
}
