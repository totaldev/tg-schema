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
    public const string TYPE_NAME = 'searchEmojis';

    public function __construct(
        /**
         * List of possible IETF language tags of the user's input language; may be empty if unknown.
         *
         * @var string[]
         */
        protected array  $inputLanguageCodes,
        /**
         * Text to search for.
         */
        protected string $text,
    ) {}

    public static function fromArray(array $array): SearchEmojis
    {
        return new static(
            inputLanguageCodes: $array['input_language_codes'],
            text              : $array['text'],
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

    public function setInputLanguageCodes(array $value): static
    {
        $this->inputLanguageCodes = $value;

        return $this;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'input_language_codes' => $this->inputLanguageCodes,
            'text'                 => $this->text,
        ];
    }
}
