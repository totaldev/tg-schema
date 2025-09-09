<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\TdFunction;

/**
 * Uses an invite link to add the current user to the chat if possible. May return an error with a message "INVITE_REQUEST_SENT" if only a join request was
 * created.
 */
class JoinChatByInviteLink extends TdFunction
{
    public const TYPE_NAME = 'joinChatByInviteLink';

    public function __construct(
        /**
         * Invite link to use.
         */
        protected string $inviteLink
    ) {}

    public static function fromArray(array $array): JoinChatByInviteLink
    {
        return new static(
            $array['invite_link'],
        );
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
        ];
    }
}
