<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of options for gifting Telegram Premium to a user.
 */
class PremiumGiftPaymentOptions extends TdObject
{
    public const TYPE_NAME = 'premiumGiftPaymentOptions';

    public function __construct(
        /**
         * The list of options sorted by Telegram Premium subscription duration.
         *
         * @var PremiumGiftPaymentOption[]
         */
        protected array $options
    ) {}

    public static function fromArray(array $array): PremiumGiftPaymentOptions
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
