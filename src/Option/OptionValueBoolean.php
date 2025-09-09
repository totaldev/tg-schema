<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

/**
 * Represents a boolean option.
 */
class OptionValueBoolean extends OptionValue
{
    public const TYPE_NAME = 'optionValueBoolean';

    public function __construct(
        /**
         * The value of the option.
         */
        protected bool $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): OptionValueBoolean
    {
        return new static(
            $array['value'],
        );
    }

    public function getValue(): bool
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}
