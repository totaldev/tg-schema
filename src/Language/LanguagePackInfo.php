<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Language;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a language pack.
 */
class LanguagePackInfo extends TdObject
{
    public const string TYPE_NAME = 'languagePackInfo';

    public function __construct(
        /**
         * Unique language pack identifier.
         */
        protected string $id,
        /**
         * Identifier of a base language pack; may be empty. If a string is missed in the language pack, then it must be fetched from base language pack. Unsupported in custom language packs.
         */
        protected string $baseLanguagePackId,
        /**
         * Language name.
         */
        protected string $name,
        /**
         * Name of the language in that language.
         */
        protected string $nativeName,
        /**
         * A language code to be used to apply plural forms. See https://www.unicode.org/cldr/charts/latest/supplemental/language_plural_rules.html for more information.
         */
        protected string $pluralCode,
        /**
         * True, if the language pack is official.
         */
        protected bool   $isOfficial,
        /**
         * True, if the language pack strings are RTL.
         */
        protected bool   $isRtl,
        /**
         * True, if the language pack is a beta language pack.
         */
        protected bool   $isBeta,
        /**
         * True, if the language pack is installed by the current user.
         */
        protected bool   $isInstalled,
        /**
         * Total number of non-deleted strings from the language pack.
         */
        protected int    $totalStringCount,
        /**
         * Total number of translated strings from the language pack.
         */
        protected int    $translatedStringCount,
        /**
         * Total number of non-deleted strings from the language pack available locally.
         */
        protected int    $localStringCount,
        /**
         * Link to language translation interface; empty for custom local language packs.
         */
        protected string $translationUrl,
    ) {}

    public static function fromArray(array $array): LanguagePackInfo
    {
        return new static(
            $array['id'],
            $array['base_language_pack_id'],
            $array['name'],
            $array['native_name'],
            $array['plural_code'],
            $array['is_official'],
            $array['is_rtl'],
            $array['is_beta'],
            $array['is_installed'],
            $array['total_string_count'],
            $array['translated_string_count'],
            $array['local_string_count'],
            $array['translation_url'],
        );
    }

    public function getBaseLanguagePackId(): string
    {
        return $this->baseLanguagePackId;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsBeta(): bool
    {
        return $this->isBeta;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getLocalStringCount(): int
    {
        return $this->localStringCount;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNativeName(): string
    {
        return $this->nativeName;
    }

    public function getPluralCode(): string
    {
        return $this->pluralCode;
    }

    public function getTotalStringCount(): int
    {
        return $this->totalStringCount;
    }

    public function getTranslatedStringCount(): int
    {
        return $this->translatedStringCount;
    }

    public function getTranslationUrl(): string
    {
        return $this->translationUrl;
    }

    public function setBaseLanguagePackId(string $value): static
    {
        $this->baseLanguagePackId = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsBeta(bool $value): static
    {
        $this->isBeta = $value;

        return $this;
    }

    public function setIsInstalled(bool $value): static
    {
        $this->isInstalled = $value;

        return $this;
    }

    public function setIsOfficial(bool $value): static
    {
        $this->isOfficial = $value;

        return $this;
    }

    public function setIsRtl(bool $value): static
    {
        $this->isRtl = $value;

        return $this;
    }

    public function setLocalStringCount(int $value): static
    {
        $this->localStringCount = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setNativeName(string $value): static
    {
        $this->nativeName = $value;

        return $this;
    }

    public function setPluralCode(string $value): static
    {
        $this->pluralCode = $value;

        return $this;
    }

    public function setTotalStringCount(int $value): static
    {
        $this->totalStringCount = $value;

        return $this;
    }

    public function setTranslatedStringCount(int $value): static
    {
        $this->translatedStringCount = $value;

        return $this;
    }

    public function setTranslationUrl(string $value): static
    {
        $this->translationUrl = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'base_language_pack_id'   => $this->baseLanguagePackId,
            'name'                    => $this->name,
            'native_name'             => $this->nativeName,
            'plural_code'             => $this->pluralCode,
            'is_official'             => $this->isOfficial,
            'is_rtl'                  => $this->isRtl,
            'is_beta'                 => $this->isBeta,
            'is_installed'            => $this->isInstalled,
            'total_string_count'      => $this->totalStringCount,
            'translated_string_count' => $this->translatedStringCount,
            'local_string_count'      => $this->localStringCount,
            'translation_url'         => $this->translationUrl,
        ];
    }
}
