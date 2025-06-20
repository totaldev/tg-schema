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
    public const TYPE_NAME = 'updateOption';

    public function __construct(
        /**
         * The option name.
         */
        protected string      $name,
        /**
         * The new option value.
         */
        protected OptionValue $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateOption
    {
        return new static(
            $array['name'],
            TdSchemaRegistry::fromArray($array['value']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
            'value' => $this->value->typeSerialize(),
        ];
    }
}
