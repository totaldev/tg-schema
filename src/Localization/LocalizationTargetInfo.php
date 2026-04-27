<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Localization;

use Totaldev\TgSchema\Language\LanguagePackInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the current localization target.
 */
class LocalizationTargetInfo extends TdObject
{
    public const string TYPE_NAME = 'localizationTargetInfo';

    public function __construct(
        /**
         * List of available language packs for this application.
         *
         * @var LanguagePackInfo[]
         */
        protected array $languagePacks
    ) {}

    public static function fromArray(array $array): LocalizationTargetInfo
    {
        return new static(
            languagePacks: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['language_packs']),
        );
    }

    public function getLanguagePacks(): array
    {
        return $this->languagePacks;
    }

    public function setLanguagePacks(array $value): static
    {
        $this->languagePacks = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'language_packs' => array_map(static fn($x) => $x->jsonSerialize(), $this->languagePacks),
        ];
    }
}
