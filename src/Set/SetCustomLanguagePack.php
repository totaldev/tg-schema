<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Language\LanguagePackInfo;
use Totaldev\TgSchema\Language\LanguagePackString;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds or changes a custom local language pack to the current localization target.
 */
class SetCustomLanguagePack extends TdFunction
{
    public const TYPE_NAME = 'setCustomLanguagePack';

    public function __construct(
        /**
         * Information about the language pack. Language pack identifier must start with 'X', consist only of English letters, digits and hyphens, and must not exceed 64 characters. Can be called before authorization.
         */
        protected LanguagePackInfo $info,
        /**
         * Strings of the new language pack.
         *
         * @var LanguagePackString[]
         */
        protected array            $strings
    ) {}

    public static function fromArray(array $array): SetCustomLanguagePack
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function getInfo(): LanguagePackInfo
    {
        return $this->info;
    }

    public function getStrings(): array
    {
        return $this->strings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'info'    => $this->info->typeSerialize(),
            'strings' => array_map(static fn($x) => $x->typeSerialize(), $this->strings),
        ];
    }
}
