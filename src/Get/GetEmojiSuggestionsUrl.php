<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an HTTP URL which can be used to automatically log in to the translation platform and suggest new emoji replacements. The URL will be valid for 30
 * seconds after generation
 */
class GetEmojiSuggestionsUrl extends TdFunction
{
    public const TYPE_NAME = 'getEmojiSuggestionsUrl';

    /**
     * Language code for which the emoji replacements will be suggested
     *
     * @var string
     */
    protected string $languageCode;

    public function __construct(string $languageCode)
    {
        $this->languageCode = $languageCode;
    }

    public static function fromArray(array $array): GetEmojiSuggestionsUrl
    {
        return new static(
            $array['language_code'],
        );
    }

    public function getLanguageCode(): string
    {
        return $this->languageCode;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'language_code' => $this->languageCode,
        ];
    }
}
