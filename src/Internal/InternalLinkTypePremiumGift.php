<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the screen for gifting Telegram Premium subscriptions to friends via inputInvoiceTelegram with telegramPaymentPurposePremiumGift
 * payments or in-store purchases.
 */
class InternalLinkTypePremiumGift extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePremiumGift';

    public function __construct(
        /**
         * Referrer specified in the link.
         */
        protected string $referrer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePremiumGift
    {
        return new static(
            $array['referrer'],
        );
    }

    public function getReferrer(): string
    {
        return $this->referrer;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'referrer' => $this->referrer,
        ];
    }
}
