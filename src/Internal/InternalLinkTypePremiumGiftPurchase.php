<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen for gifting Telegram Premium subscriptions to friends via inputInvoiceTelegram with telegramPaymentPurposePremiumGift
 * payments or in-store purchases.
 */
class InternalLinkTypePremiumGiftPurchase extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypePremiumGiftPurchase';

    public function __construct(
        /**
         * Referrer specified in the link.
         */
        protected string $referrer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePremiumGiftPurchase
    {
        return new static(
            referrer: $array['referrer'],
        );
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function setReferrer(string $value): static
    {
        $this->referrer = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }
}
