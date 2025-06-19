<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

/**
 * Describes a subscription to a channel chat.
 */
class StarSubscriptionTypeChannel extends StarSubscriptionType
{
    public const TYPE_NAME = 'starSubscriptionTypeChannel';

    public function __construct(
        /**
         * True, if the subscription is active and the user can use the method reuseStarSubscription to join the subscribed chat again.
         */
        protected bool   $canReuse,
        /**
         * The invite link that can be used to renew the subscription if it has been expired; may be empty, if the link isn't available anymore.
         */
        protected string $inviteLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarSubscriptionTypeChannel
    {
        return new static(
            $array['can_reuse'],
            $array['invite_link'],
        );
    }

    public function getCanReuse(): bool
    {
        return $this->canReuse;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'can_reuse'   => $this->canReuse,
            'invite_link' => $this->inviteLink,
        ];
    }
}
