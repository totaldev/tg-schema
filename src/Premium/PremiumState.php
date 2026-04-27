<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Business\BusinessFeaturePromotionAnimation;
use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains state of Telegram Premium subscription and promotion videos for Premium features.
 */
class PremiumState extends TdObject
{
    public const string TYPE_NAME = 'premiumState';

    public function __construct(
        /**
         * The list of available promotion animations for Premium features.
         *
         * @var PremiumFeaturePromotionAnimation[]
         */
        protected array         $animations,
        /**
         * The list of available promotion animations for Business features.
         *
         * @var BusinessFeaturePromotionAnimation[]
         */
        protected array         $businessAnimations,
        /**
         * The list of available options for buying Telegram Premium.
         *
         * @var PremiumStatePaymentOption[]
         */
        protected array         $paymentOptions,
        /**
         * Text description of the state of the current Premium subscription; may be empty if the current user has no Telegram Premium subscription.
         */
        protected FormattedText $state,
    ) {}

    public static function fromArray(array $array): PremiumState
    {
        return new static(
            animations        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['animations']),
            businessAnimations: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['business_animations']),
            paymentOptions    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['payment_options']),
            state             : TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getAnimations(): array
    {
        return $this->animations;
    }

    public function getBusinessAnimations(): array
    {
        return $this->businessAnimations;
    }

    public function getPaymentOptions(): array
    {
        return $this->paymentOptions;
    }

    public function getState(): FormattedText
    {
        return $this->state;
    }

    public function setAnimations(array $value): static
    {
        $this->animations = $value;

        return $this;
    }

    public function setBusinessAnimations(array $value): static
    {
        $this->businessAnimations = $value;

        return $this;
    }

    public function setPaymentOptions(array $value): static
    {
        $this->paymentOptions = $value;

        return $this;
    }

    public function setState(FormattedText $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'animations'          => array_map(static fn($x) => $x->jsonSerialize(), $this->animations),
            'business_animations' => array_map(static fn($x) => $x->jsonSerialize(), $this->businessAnimations),
            'payment_options'     => array_map(static fn($x) => $x->jsonSerialize(), $this->paymentOptions),
            'state'               => $this->state->jsonSerialize(),
        ];
    }
}
