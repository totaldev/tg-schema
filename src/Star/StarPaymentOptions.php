<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of options for buying Telegram Stars.
 */
class StarPaymentOptions extends TdObject
{
    public const TYPE_NAME = 'starPaymentOptions';

    public function __construct(
        /**
         * The list of options.
         *
         * @var StarPaymentOption[]
         */
        protected array $options
    ) {}

    public static function fromArray(array $array): StarPaymentOptions
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
