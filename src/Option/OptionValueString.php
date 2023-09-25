<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Option;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a string option
 */
class OptionValueString extends OptionValue
{
    public const TYPE_NAME = 'optionValueString';

    /**
     * The value of the option
     *
     * @var string
     */
    protected string $value;

    public function __construct(string $value)
    {
        parent::__construct();

        $this->value = $value;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }
}
