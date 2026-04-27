<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Option\OptionValue;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An option changed its value.
 */
class UpdateOption extends Update
{
    public const string TYPE_NAME = 'updateOption';

    public function __construct(
        /**
         * The option name.
         */
        protected string      $name,
        /**
         * The new option value.
         */
        protected OptionValue $value,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateOption
    {
        return new static(
            name : $array['name'],
            value: TdSchemaRegistry::fromArray($array['value']),
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): OptionValue
    {
        return $this->value;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setValue(OptionValue $value): static
    {
        $this->value = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'value' => $this->value->jsonSerialize(),
        ];
    }
}
