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
    public const string TYPE_NAME = 'updateLanguagePackStrings';

    public function __construct(
        /**
         * Identifier of the updated language pack.
         */
        protected string $languagePackId,
        /**
         * Localization target to which the language pack belongs.
         */
        protected string $localizationTarget,
        /**
         * List of changed language pack strings; empty if all strings have changed.
         *
         * @var LanguagePackString[]
         */
        protected array  $strings,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateLanguagePackStrings
    {
        return new static(
            languagePackId    : $array['language_pack_id'],
            localizationTarget: $array['localization_target'],
            strings           : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['strings']),
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

    public function setLanguagePackId(string $value): static
    {
        $this->languagePackId = $value;

        return $this;
    }

    public function setLocalizationTarget(string $value): static
    {
        $this->localizationTarget = $value;

        return $this;
    }

    public function setStrings(array $value): static
    {
        $this->strings = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'language_pack_id'    => $this->languagePackId,
            'localization_target' => $this->localizationTarget,
            'strings'             => array_map(static fn($x) => $x->jsonSerialize(), $this->strings),
        ];
    }
}
