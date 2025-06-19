<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Failed;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a user that has failed to be added to a chat.
 */
class FailedToAddMember extends TdObject
{
    public const TYPE_NAME = 'failedToAddMember';

    public function __construct(
        /**
         * User identifier.
         */
        protected int  $userId,
        /**
         * True, if subscription to Telegram Premium would have allowed to add the user to the chat.
         */
        protected bool $premiumWouldAllowInvite,
        /**
         * True, if subscription to Telegram Premium is required to send the user chat invite link.
         */
        protected bool $premiumRequiredToSendMessages
    ) {}

    public static function fromArray(array $array): FailedToAddMember
    {
        return new static(
            $array['user_id'],
            $array['premium_would_allow_invite'],
            $array['premium_required_to_send_messages'],
        );
    }

    public function getPremiumRequiredToSendMessages(): bool
    {
        return $this->premiumRequiredToSendMessages;
    }

    public function getPremiumWouldAllowInvite(): bool
    {
        return $this->premiumWouldAllowInvite;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                             => static::TYPE_NAME,
            'user_id'                           => $this->userId,
            'premium_would_allow_invite'        => $this->premiumWouldAllowInvite,
            'premium_required_to_send_messages' => $this->premiumRequiredToSendMessages,
        ];
    }
}
