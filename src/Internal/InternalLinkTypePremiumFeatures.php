<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Premium features screen of the application from which the user can subscribe to Telegram Premium. Call getPremiumFeatures with the
 * given referrer to process the link.
 */
class InternalLinkTypePremiumFeatures extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypePremiumFeatures';

    public function __construct(
        /**
         * Referrer specified in the link.
         */
        protected string $referrer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypePremiumFeatures
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
