<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Sets the result of an inline query; for bots only
 */
class AnswerInlineQuery extends TdFunction
{
    public const TYPE_NAME = 'answerInlineQuery';

    /**
     * Identifier of the inline query
     *
     * @var int
     */
    protected int $inlineQueryId;

    /**
     * Pass true if results may be cached and returned only for the user that sent the query. By default, results may be returned to any user who sends the same query
     *
     * @var bool
     */
    protected bool $isPersonal;

    /**
     * Button to be shown above inline query results; pass null if none
     *
     * @var InlineQueryResultsButton
     */
    protected InlineQueryResultsButton $button;

    /**
     * The results of the query
     *
     * @var InputInlineQueryResult[]
     */
    protected array $results;

    /**
     * Allowed time to cache the results of the query, in seconds
     *
     * @var int
     */
    protected int $cacheTime;

    /**
     * Offset for the next inline query; pass an empty string if there are no more results
     *
     * @var string
     */
    protected string $nextOffset;

    public function __construct(
        int $inlineQueryId,
        bool $isPersonal,
        InlineQueryResultsButton $button,
        array $results,
        int $cacheTime,
        string $nextOffset
    ) {
        $this->inlineQueryId = $inlineQueryId;
        $this->isPersonal = $isPersonal;
        $this->button = $button;
        $this->results = $results;
        $this->cacheTime = $cacheTime;
        $this->nextOffset = $nextOffset;
    }

    public static function fromArray(array $array): AnswerInlineQuery
    {
        return new static(
            $array['inline_query_id'],
            $array['is_personal'],
            TdSchemaRegistry::fromArray($array['button']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['results']),
            $array['cache_time'],
            $array['next_offset'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'inline_query_id' => $this->inlineQueryId,
            'is_personal' => $this->isPersonal,
            'button' => $this->button->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->results),
            'cache_time' => $this->cacheTime,
            'next_offset' => $this->nextOffset,
        ];
    }

    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getButton(): InlineQueryResultsButton
    {
        return $this->button;
    }

    public function getResults(): array
    {
        return $this->results;
    }

    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }
}
