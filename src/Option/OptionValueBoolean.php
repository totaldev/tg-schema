<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a boolean option
 */
class OptionValueBoolean extends OptionValue
{
    public const TYPE_NAME = 'optionValueBoolean';

    /**
     * The value of the option
     *
     * @var bool
     */
    protected bool $value;

    public function __construct(bool $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): OptionValueBoolean
    {
        return new static(
            $array['value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }

    public function getValue(): bool
    {
        return $this->value;
    }
}
