<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains state of Telegram Premium subscription and promotion videos for Premium features
 */
class PremiumState extends TdObject
{
    public const TYPE_NAME = 'premiumState';

    /**
     * Text description of the state of the current Premium subscription; may be empty if the current user has no Telegram Premium subscription
     *
     * @var FormattedText
     */
    protected FormattedText $state;

    /**
     * The list of available options for buying Telegram Premium
     *
     * @var PremiumStatePaymentOption[]
     */
    protected array $paymentOptions;

    /**
     * The list of available promotion animations for Premium features
     *
     * @var PremiumFeaturePromotionAnimation[]
     */
    protected array $animations;

    public function __construct(FormattedText $state, array $paymentOptions, array $animations)
    {
        $this->state = $state;
        $this->paymentOptions = $paymentOptions;
        $this->animations = $animations;
    }

    public static function fromArray(array $array): PremiumState
    {
        return new static(
            TdSchemaRegistry::fromArray($array['state']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['paymentOptions']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['animations']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'state' => $this->state->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->paymentOptions),
            array_map(fn($x) => $x->typeSerialize(), $this->animations),
        ];
    }

    public function getState(): FormattedText
    {
        return $this->state;
    }

    public function getPaymentOptions(): array
    {
        return $this->paymentOptions;
    }

    public function getAnimations(): array
    {
        return $this->animations;
    }
}
