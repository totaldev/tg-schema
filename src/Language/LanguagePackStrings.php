<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of language pack strings.
 */
class LanguagePackStrings extends TdObject
{
    public const TYPE_NAME = 'languagePackStrings';

    public function __construct(
        /**
         * A list of language pack strings.
         *
         * @var LanguagePackString[]
         */
        protected array $strings
    ) {}

    public static function fromArray(array $array): LanguagePackStrings
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function getStrings(): array
    {
        return $this->strings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->strings),
        ];
    }
}
