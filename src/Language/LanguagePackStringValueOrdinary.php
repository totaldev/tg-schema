<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

/**
 * An ordinary language pack string.
 */
class LanguagePackStringValueOrdinary extends LanguagePackStringValue
{
    public const string TYPE_NAME = 'languagePackStringValueOrdinary';

    public function __construct(
        /**
         * String value.
         */
        protected string $value
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LanguagePackStringValueOrdinary
    {
        return new static(
            value: $array['value'],
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
