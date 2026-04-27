<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\Inline\InlineQueryResultsButton;
use Totaldev\TgSchema\Input\InputInlineQueryResult;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the result of an inline query; for bots only.
 */
class AnswerInlineQuery extends TdFunction
{
    public const string TYPE_NAME = 'answerInlineQuery';

    public function __construct(
        /**
         * Allowed time to cache the results of the query, in seconds.
         */
        protected int                       $cacheTime,
        /**
         * Identifier of the inline query.
         */
        protected int                       $inlineQueryId,
        /**
         * Pass true if results may be cached and returned only for the user that sent the query. By default, results may be returned to any user who sends the same query.
         */
        protected bool                      $isPersonal,
        /**
         * Offset for the next inline query; pass an empty string if there are no more results.
         */
        protected string                    $nextOffset,
        /**
         * The results of the query.
         *
         * @var InputInlineQueryResult[]
         */
        protected array                     $results,
        /**
         * Button to be shown above inline query results; pass null if none.
         */
        protected ?InlineQueryResultsButton $button = null,
    ) {}

    public static function fromArray(array $array): AnswerInlineQuery
    {
        return new static(
            button       : (isset($array['button']) ? TdSchemaRegistry::fromArray($array['button']) : null),
            cacheTime    : $array['cache_time'],
            inlineQueryId: $array['inline_query_id'],
            isPersonal   : $array['is_personal'],
            nextOffset   : $array['next_offset'],
            results      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['results']),
        );
    }

    public function getButton(): ?InlineQueryResultsButton
    {
        return $this->button;
    }

    public function getCacheTime(): int
    {
        return $this->cacheTime;
    }

    public function getInlineQueryId(): int
    {
        return $this->inlineQueryId;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
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

    public function setCacheTime(int $value): static
    {
        $this->cacheTime = $value;

        return $this;
    }

    public function setInlineQueryId(int $value): static
    {
        $this->inlineQueryId = $value;

        return $this;
    }

    public function setIsPersonal(bool $value): static
    {
        $this->isPersonal = $value;

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
            'cache_time'      => $this->cacheTime,
            'inline_query_id' => $this->inlineQueryId,
            'is_personal'     => $this->isPersonal,
            'next_offset'     => $this->nextOffset,
            'results'         => array_map(static fn($x) => $x->jsonSerialize(), $this->results),
        ];
    }
}
