<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Option;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents an integer option
 */
class OptionValueInteger extends OptionValue
{
    public const TYPE_NAME = 'optionValueInteger';

    /**
     * The value of the option
     *
     * @var int
     */
    protected int $value;

    public function __construct(int $value)
    {
        parent::__construct();

        $this->value = $value;
    }

    public static function fromArray(array $array): OptionValueInteger
    {
        return new static(
            is_numeric($array['value']) ? (int)$array['value'] : $array['value'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'value' => $this->value,
        ];
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
