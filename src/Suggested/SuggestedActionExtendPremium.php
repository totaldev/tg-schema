<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Suggested;

/**
 * Suggests the user to extend their expiring Telegram Premium subscription.
 */
class SuggestedActionExtendPremium extends SuggestedAction
{
    public const TYPE_NAME = 'suggestedActionExtendPremium';

    public function __construct(
        /**
         * A URL for managing Telegram Premium subscription.
         */
        protected string $managePremiumSubscriptionUrl
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): SuggestedActionExtendPremium
    {
        return new static(
            $array['manage_premium_subscription_url'],
        );
    }

    public function getManagePremiumSubscriptionUrl(): string
    {
        return $this->managePremiumSubscriptionUrl;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'manage_premium_subscription_url' => $this->managePremiumSubscriptionUrl,
        ];
    }
}
