<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\TdFunction;

/**
 * Searches for emojis by keywords. Supported only if the file database is enabled. Order of results is unspecified.
 */
class SearchEmojis extends TdFunction
{
    public const TYPE_NAME = 'searchEmojis';

    public function __construct(
        /**
         * Text to search for.
         */
        protected string $text,
        /**
         * List of possible IETF language tags of the user's input language; may be empty if unknown.
         *
         * @var string[]
         */
        protected array  $inputLanguageCodes,
    ) {}

    public static function fromArray(array $array): SearchEmojis
    {
        return new static(
            $array['text'],
            $array['input_language_codes'],
        );
    }

    public function getInputLanguageCodes(): array
    {
        return $this->inputLanguageCodes;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'text'                 => $this->text,
            'input_language_codes' => $this->inputLanguageCodes,
        ];
    }
}
