<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Language\LanguagePackString;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds, edits or deletes a string in a custom local language pack. Can be called before authorization.
 */
class SetCustomLanguagePackString extends TdFunction
{
    public const TYPE_NAME = 'setCustomLanguagePackString';

    public function __construct(
        /**
         * Identifier of a previously added custom local language pack in the current localization target.
         */
        protected string             $languagePackId,
        /**
         * New language pack string.
         */
        protected LanguagePackString $newString
    ) {}

    public static function fromArray(array $array): SetCustomLanguagePackString
    {
        return new static(
            $array['language_pack_id'],
            TdSchemaRegistry::fromArray($array['new_string']),
        );
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getNewString(): LanguagePackString
    {
        return $this->newString;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
            'new_string'       => $this->newString->typeSerialize(),
        ];
    }
}
