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
    public const string TYPE_NAME = 'setOption';

    public function __construct(
        /**
         * The name of the option.
         */
        protected string       $name,
        /**
         * The new value of the option; pass null to reset option value to a default value.
         */
        protected ?OptionValue $value = null,
    ) {}

    public static function fromArray(array $array): SetOption
    {
        return new static(
            name : $array['name'],
            value: (isset($array['value']) ? TdSchemaRegistry::fromArray($array['value']) : null),
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

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setValue(?OptionValue $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'value' => (null !== $this->value ? $this->value->jsonSerialize() : null),
        ];
    }
}
