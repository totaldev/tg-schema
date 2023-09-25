<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about features, available to Premium users
 */
class PremiumFeatures extends TdObject
{
    public const TYPE_NAME = 'premiumFeatures';

    /**
     * The list of available features
     *
     * @var PremiumFeature[]
     */
    protected array $features;

    /**
     * The list of limits, increased for Premium users
     *
     * @var PremiumLimit[]
     */
    protected array $limits;

    /**
     * An internal link to be opened to pay for Telegram Premium if store payment isn't possible; may be null if direct payment isn't available
     *
     * @var InternalLinkType|null
     */
    protected ?InternalLinkType $paymentLink;

    public function __construct(array $features, array $limits, ?InternalLinkType $paymentLink)
    {
        $this->features = $features;
        $this->limits = $limits;
        $this->paymentLink = $paymentLink;
    }

    public static function fromArray(array $array): PremiumFeatures
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['features']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['limits']),
            (isset($array['payment_link']) ? TdSchemaRegistry::fromArray($array['payment_link']) : null),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->features),
            array_map(fn($x) => $x->typeSerialize(), $this->limits),
            'payment_link' => (isset($this->paymentLink) ? $this->paymentLink : null),
        ];
    }
}
