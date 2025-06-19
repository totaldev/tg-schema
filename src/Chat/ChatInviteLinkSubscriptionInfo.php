<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Star\StarSubscriptionPricing;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about subscription plan that must be paid by the user to use a chat invite link.
 */
class ChatInviteLinkSubscriptionInfo extends TdObject
{
    public const TYPE_NAME = 'chatInviteLinkSubscriptionInfo';

    public function __construct(
        /**
         * Information about subscription plan that must be paid by the user to use the link.
         */
        protected StarSubscriptionPricing $pricing,
        /**
         * True, if the user has already paid for the subscription and can use joinChatByInviteLink to join the subscribed chat again.
         */
        protected bool                    $canReuse,
        /**
         * Identifier of the payment form to use for subscription payment; 0 if the subscription can't be paid.
         */
        protected int                     $formId
    ) {}

    public static function fromArray(array $array): ChatInviteLinkSubscriptionInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['pricing']),
            $array['can_reuse'],
            $array['form_id'],
        );
    }

    public function getCanReuse(): bool
    {
        return $this->canReuse;
    }

    public function getFormId(): int
    {
        return $this->formId;
    }

    public function getPricing(): StarSubscriptionPricing
    {
        return $this->pricing;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'pricing'   => $this->pricing->typeSerialize(),
            'can_reuse' => $this->canReuse,
            'form_id'   => $this->formId,
        ];
    }
}
