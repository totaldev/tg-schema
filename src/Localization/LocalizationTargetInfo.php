<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Localization;

use Totaldev\TgSchema\Language\LanguagePackInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the current localization target
 */
class LocalizationTargetInfo extends TdObject
{
    public const TYPE_NAME = 'localizationTargetInfo';

    /**
     * List of available language packs for this application
     *
     * @var LanguagePackInfo[]
     */
    protected array $languagePacks;

    public function __construct(array $languagePacks)
    {
        $this->languagePacks = $languagePacks;
    }

    public static function fromArray(array $array): LocalizationTargetInfo
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['languagePacks']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->languagePacks),
        ];
    }

    public function getLanguagePacks(): array
    {
        return $this->languagePacks;
    }
}