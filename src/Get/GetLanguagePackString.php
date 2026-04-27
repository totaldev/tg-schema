<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a string stored in the local database from the specified localization target and language pack by its key. Returns a 404 error if the string is not
 * found. Can be called synchronously.
 */
class GetLanguagePackString extends TdFunction
{
    public const string TYPE_NAME = 'getLanguagePackString';

    public function __construct(
        /**
         * Language pack key of the string to be returned.
         */
        protected string $key,
        /**
         * Path to the language pack database in which strings are stored.
         */
        protected string $languagePackDatabasePath,
        /**
         * Language pack identifier.
         */
        protected string $languagePackId,
        /**
         * Localization target to which the language pack belongs.
         */
        protected string $localizationTarget,
    ) {}

    public static function fromArray(array $array): GetLanguagePackString
    {
        return new static(
            key                     : $array['key'],
            languagePackDatabasePath: $array['language_pack_database_path'],
            languagePackId          : $array['language_pack_id'],
            localizationTarget      : $array['localization_target'],
        );
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getLanguagePackDatabasePath(): string
    {
        return $this->languagePackDatabasePath;
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function getLocalizationTarget(): string
    {
        return $this->localizationTarget;
    }

    public function setKey(string $value): static
    {
        $this->key = $value;

        return $this;
    }

    public function setLanguagePackDatabasePath(string $value): static
    {
        $this->languagePackDatabasePath = $value;

        return $this;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'key'                         => $this->key,
            'language_pack_database_path' => $this->languagePackDatabasePath,
            'language_pack_id'            => $this->languagePackId,
            'localization_target'         => $this->localizationTarget,
        ];
    }
}
