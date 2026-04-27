<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the results of the inline query. Use sendInlineQueryResultMessage to send the result of the query.
 */
class InlineQueryResults extends TdObject
{
    public const string TYPE_NAME = 'inlineQueryResults';

    public function __construct(
        /**
         * Button to be shown above inline query results; may be null.
         */
        protected ?InlineQueryResultsButton $button,
        /**
         * Unique identifier of the inline query.
         */
        protected int                       $inlineQueryId,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string                    $nextOffset,
        /**
         * Results of the query.
         *
         * @var InlineQueryResult[]
         */
        protected array                     $results,
    ) {}

    public static function fromArray(array $array): InlineQueryResults
    {
        return new static(
            button       : (isset($array['button']) ? TdSchemaRegistry::fromArray($array['button']) : null),
            inlineQueryId: $array['inline_query_id'],
            nextOffset   : $array['next_offset'],
            results      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['results']),
        );
    }

    public function getButton(): ?InlineQueryResultsButton
    {
        return $this->button;
    }

    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function setButton(?InlineQueryResultsButton $value): static
    {
        $this->button = $value;

        return $this;
    }

    public function setInlineQueryId(int $value): static
    {
        $this->inlineQueryId = $value;

        return $this;
    }

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setResults(array $value): static
    {
        $this->results = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'button'          => (null !== $this->button ? $this->button->jsonSerialize() : null),
            'inline_query_id' => $this->inlineQueryId,
            'next_offset'     => $this->nextOffset,
            'results'         => array_map(static fn($x) => $x->jsonSerialize(), $this->results),
        ];
    }
}
