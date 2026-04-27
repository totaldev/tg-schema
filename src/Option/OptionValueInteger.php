<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

/**
 * Represents an integer option.
 */
class OptionValueInteger extends OptionValue
{
    public const string TYPE_NAME = 'optionValueInteger';

    public function __construct(
        /**
         * The value of the option.
         */
        protected int $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): OptionValueInteger
    {
        return new static(
            value: $array['value'],
        );
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function setValue(int $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}
