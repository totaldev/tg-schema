<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of options for creating Telegram Premium gift codes or Telegram Premium giveaway.
 */
class PremiumGiftCodePaymentOptions extends TdObject
{
    public const TYPE_NAME = 'premiumGiftCodePaymentOptions';

    public function __construct(
        /**
         * The list of options.
         *
         * @var PremiumGiftCodePaymentOption[]
         */
        protected array $options
    ) {}

    public static function fromArray(array $array): PremiumGiftCodePaymentOptions
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
        );
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->options),
        ];
    }
}
