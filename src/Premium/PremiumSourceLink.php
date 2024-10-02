<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

/**
 * A user opened an internal link of the type internalLinkTypePremiumFeatures.
 */
class PremiumSourceLink extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceLink';

    public function __construct(
        /**
         * The referrer from the link.
         */
        protected string $referrer
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceLink
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
