<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Language\LanguagePackString;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some language pack strings have been updated.
 */
class UpdateLanguagePackStrings extends Update
{
    public const TYPE_NAME = 'updateLanguagePackStrings';

    public function __construct(
        /**
         * Localization target to which the language pack belongs.
         */
        protected string $localizationTarget,
        /**
         * Identifier of the updated language pack.
         */
        protected string $languagePackId,
        /**
         * List of changed language pack strings; empty if all strings have changed.
         *
         * @var LanguagePackString[]
         */
        protected array  $strings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateLanguagePackStrings
    {
        return new static(
            $array['localization_target'],
            $array['language_pack_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
        );
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    public function getStrings(): array
    {
        return $this->strings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'localization_target' => $this->localizationTarget,
            'language_pack_id'    => $this->languagePackId,
            array_map(static fn($x) => $x->typeSerialize(), $this->strings),
        ];
    }
}
