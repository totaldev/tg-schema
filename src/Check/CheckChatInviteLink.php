<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks the validity of an invite link for a chat and returns information about the corresponding chat.
 */
class CheckChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'checkChatInviteLink';

    public function __construct(
        /**
         * Invite link to be checked.
         */
        protected string $inviteLink
    ) {}

    public static function fromArray(array $array): CheckChatInviteLink
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
