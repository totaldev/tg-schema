<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Language\LanguagePackInfo;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits information about a custom local language pack in the current localization target. Can be called before authorization.
 */
class EditCustomLanguagePackInfo extends TdFunction
{
    public const TYPE_NAME = 'editCustomLanguagePackInfo';

    public function __construct(
        /**
         * New information about the custom local language pack.
         */
        protected LanguagePackInfo $info
    ) {}

    public static function fromArray(array $array): EditCustomLanguagePackInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['info']),
        );
    }

    public function getInfo(): LanguagePackInfo
    {
        return $this->info;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'info'  => $this->info->typeSerialize(),
        ];
    }
}
