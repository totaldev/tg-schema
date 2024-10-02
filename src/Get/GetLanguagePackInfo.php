<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a language pack. Returned language pack identifier may be different from a provided one. Can be called before authorization.
 */
class GetLanguagePackInfo extends TdFunction
{
    public const TYPE_NAME = 'getLanguagePackInfo';

    public function __construct(
        /**
         * Language pack identifier.
         */
        protected string $languagePackId
    ) {}

    public static function fromArray(array $array): GetLanguagePackInfo
    {
        return new static(
            $array['language_pack_id'],
        );
    }

    public function getLanguagePackId(): string
    {
        return $this->languagePackId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'language_pack_id' => $this->languagePackId,
        ];
    }
}
