<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents one language pack string.
 */
class LanguagePackString extends TdObject
{
    public const TYPE_NAME = 'languagePackString';

    public function __construct(
        /**
         * String key.
         */
        protected string                  $key,
        /**
         * String value; pass null if the string needs to be taken from the built-in English language pack.
         */
        protected LanguagePackStringValue $value
    ) {}

    public static function fromArray(array $array): LanguagePackString
    {
        return new static(
            $array['key'],
            TdSchemaRegistry::fromArray($array['value']),
        );
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getValue(): LanguagePackStringValue
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'key'   => $this->key,
            'value' => $this->value->typeSerialize(),
        ];
    }
}
