<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of options for creating of Telegram Star giveaway.
 */
class StarGiveawayPaymentOptions extends TdObject
{
    public const TYPE_NAME = 'starGiveawayPaymentOptions';

    public function __construct(
        /**
         * The list of options.
         *
         * @var StarGiveawayPaymentOption[]
         */
        protected array $options
    ) {}

    public static function fromArray(array $array): StarGiveawayPaymentOptions
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
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->options),
        ];
    }
}
