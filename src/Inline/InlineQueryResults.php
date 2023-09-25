<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the results of the inline query. Use sendInlineQueryResultMessage to send the result of the query
 */
class InlineQueryResults extends TdObject
{
    public const TYPE_NAME = 'inlineQueryResults';

    /**
     * Button to be shown above inline query results; may be null
     *
     * @var InlineQueryResultsButton|null
     */
    protected ?InlineQueryResultsButton $button;

    /**
     * Unique identifier of the inline query
     *
     * @var int
     */
    protected int $inlineQueryId;

    /**
     * The offset for the next request. If empty, there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    /**
     * Results of the query
     *
     * @var InlineQueryResult[]
     */
    protected array $results;

    public function __construct(
        int                       $inlineQueryId,
        ?InlineQueryResultsButton $button,
        array                     $results,
        string                    $nextOffset,
    )
    {
        $this->inlineQueryId = $inlineQueryId;
        $this->button = $button;
        $this->results = $results;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): InlineQueryResults
    {
        return new static(
            $array['inline_query_id'],
            (isset($array['button']) ? TdSchemaRegistry::fromArray($array['button']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['results']),
            $array['next_offset'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_query_id' => $this->inlineQueryId,
            'button' => (isset($this->button) ? $this->button : null),
            array_map(fn($x) => $x->typeSerialize(), $this->results),
            'next_offset' => $this->nextOffset,
        ];
    }
}
