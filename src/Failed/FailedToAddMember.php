<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Failed;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a user who has failed to be added to a chat.
 */
class FailedToAddMember extends TdObject
{
    public const string TYPE_NAME = 'failedToAddMember';

    public function __construct(
        /**
         * True, if subscription to Telegram Premium is required to send the user chat invite link.
         */
        protected bool $premiumRequiredToSendMessages,
        /**
         * True, if subscription to Telegram Premium would have allowed to add the user to the chat.
         */
        protected bool $premiumWouldAllowInvite,
        /**
         * User identifier.
         */
        protected int  $userId,
    ) {}

    public static function fromArray(array $array): FailedToAddMember
    {
        return new static(
            premiumRequiredToSendMessages: $array['premium_required_to_send_messages'],
            premiumWouldAllowInvite      : $array['premium_would_allow_invite'],
            userId                       : $array['user_id'],
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

    public function setPremiumRequiredToSendMessages(bool $value): static
    {
        $this->premiumRequiredToSendMessages = $value;

        return $this;
    }

    public function setPremiumWouldAllowInvite(bool $value): static
    {
        $this->premiumWouldAllowInvite = $value;

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
            '@type'                             => static::TYPE_NAME,
            'premium_required_to_send_messages' => $this->premiumRequiredToSendMessages,
            'premium_would_allow_invite'        => $this->premiumWouldAllowInvite,
            'user_id'                           => $this->userId,
        ];
    }
}
