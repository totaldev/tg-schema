<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about features, available to Premium users.
 */
class PremiumFeatures extends TdObject
{
    public const string TYPE_NAME = 'premiumFeatures';

    public function __construct(
        /**
         * The list of available features.
         *
         * @var PremiumFeature[]
         */
        protected array             $features,
        /**
         * The list of limits, increased for Premium users.
         *
         * @var PremiumLimit[]
         */
        protected array             $limits,
        /**
         * An internal link to be opened to pay for Telegram Premium if store payment isn't possible; may be null if direct payment isn't available.
         */
        protected ?InternalLinkType $paymentLink,
    ) {}

    public static function fromArray(array $array): PremiumFeatures
    {
        return new static(
            features   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['features']),
            limits     : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['limits']),
            paymentLink: (isset($array['payment_link']) ? TdSchemaRegistry::fromArray($array['payment_link']) : null),
        );
    }

    public function getFeatures(): array
    {
        return $this->features;
    }

    public function getLimits(): array
    {
        return $this->limits;
    }

    public function getPaymentLink(): ?InternalLinkType
    {
        return $this->paymentLink;
    }

    public function setFeatures(array $value): static
    {
        $this->features = $value;

        return $this;
    }

    public function setLimits(array $value): static
    {
        $this->limits = $value;

        return $this;
    }

    public function setPaymentLink(?InternalLinkType $value): static
    {
        $this->paymentLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'features'     => array_map(static fn($x) => $x->jsonSerialize(), $this->features),
            'limits'       => array_map(static fn($x) => $x->jsonSerialize(), $this->limits),
            'payment_link' => (null !== $this->paymentLink ? $this->paymentLink->jsonSerialize() : null),
        ];
    }
}
