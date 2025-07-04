<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of options for creating of Telegram Premium giveaway or manual distribution of Telegram Premium among chat members.
 */
class PremiumGiveawayPaymentOptions extends TdObject
{
    public const TYPE_NAME = 'premiumGiveawayPaymentOptions';

    public function __construct(
        /**
         * The list of options.
         *
         * @var PremiumGiveawayPaymentOption[]
         */
        protected array $options
    ) {}

    public static function fromArray(array $array): PremiumGiveawayPaymentOptions
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
        );
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'options' => array_map(static fn($x) => $x->typeSerialize(), $this->options),
        ];
    }
}
