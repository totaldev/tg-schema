<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches for a given quote in a text. Returns found quote start position in UTF-16 code units. Returns a 404 error if the quote is not found. Can be called
 * synchronously.
 */
class SearchQuote extends TdFunction
{
    public const TYPE_NAME = 'searchQuote';

    public function __construct(
        /**
         * Text in which to search for the quote.
         */
        protected FormattedText $text,
        /**
         * Quote to search for.
         */
        protected FormattedText $quote,
        /**
         * Approximate quote position in UTF-16 code units.
         */
        protected int           $quotePosition
    ) {}

    public static function fromArray(array $array): SearchQuote
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            TdSchemaRegistry::fromArray($array['quote']),
            $array['quote_position'],
        );
    }

    public function getQuote(): FormattedText
    {
        return $this->quote;
    }

    public function getQuotePosition(): int
    {
        return $this->quotePosition;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'text'           => $this->text->typeSerialize(),
            'quote'          => $this->quote->typeSerialize(),
            'quote_position' => $this->quotePosition,
        ];
    }
}
