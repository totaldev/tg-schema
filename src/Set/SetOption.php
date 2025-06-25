<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Option\OptionValue;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the value of an option. (Check the list of available options on https://core.telegram.org/tdlib/options.) Only writable options can be set. Can be
 * called before authorization.
 */
class SetOption extends TdFunction
{
    public const TYPE_NAME = 'setOption';

    public function __construct(
        /**
         * The name of the option.
         */
        protected string       $name,
        /**
         * The new value of the option; pass null to reset option value to a default value.
         */
        protected ?OptionValue $value = null
    ) {}

    public static function fromArray(array $array): SetOption
    {
        return new static(
            $array['name'],
            isset($array['value']) ? TdSchemaRegistry::fromArray($array['value']) : null,
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): ?OptionValue
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'value' => $this->value ?? null,
        ];
    }
}
