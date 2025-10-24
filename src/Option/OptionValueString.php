<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

/**
 * Represents a string option.
 */
class OptionValueString extends OptionValue
{
    public const string TYPE_NAME = 'optionValueString';

    public function __construct(
        /**
         * The value of the option.
         */
        protected string $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): OptionValueString
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): static
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
