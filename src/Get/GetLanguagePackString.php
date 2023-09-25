<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a string stored in the local database from the specified localization target and language pack by its key. Returns a 404 error if the string is not
 * found. Can be called synchronously
 */
class GetLanguagePackString extends TdFunction
{
    public const TYPE_NAME = 'getLanguagePackString';

    /**
     * Language pack key of the string to be returned
     *
     * @var string
     */
    protected string $key;

    /**
     * Path to the language pack database in which strings are stored
     *
     * @var string
     */
    protected string $languagePackDatabasePath;

    /**
     * Language pack identifier
     *
     * @var string
     */
    protected string $languagePackId;

    /**
     * Localization target to which the language pack belongs
     *
     * @var string
     */
    protected string $localizationTarget;

    public function __construct(
        string $languagePackDatabasePath,
        string $localizationTarget,
        string $languagePackId,
        string $key,
    )
    {
        $this->languagePackDatabasePath = $languagePackDatabasePath;
        $this->localizationTarget = $localizationTarget;
        $this->languagePackId = $languagePackId;
        $this->key = $key;
    }

    public static function fromArray(array $array): GetLanguagePackString
    {
        return new static(
            $array['language_pack_database_path'],
            $array['localization_target'],
            $array['language_pack_id'],
            $array['key'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_pack_database_path' => $this->languagePackDatabasePath,
            'localization_target' => $this->localizationTarget,
            'language_pack_id' => $this->languagePackId,
            'key' => $this->key,
        ];
    }
}
