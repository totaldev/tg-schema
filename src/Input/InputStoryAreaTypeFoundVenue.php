<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An area pointing to a venue found by the bot getOption("venue_search_bot_username").
 */
class InputStoryAreaTypeFoundVenue extends InputStoryAreaType
{
    public const string TYPE_NAME = 'inputStoryAreaTypeFoundVenue';

    public function __construct(
        /**
         * Identifier of the inline query, used to found the venue.
         */
        protected int    $queryId,
        /**
         * Identifier of the inline query result.
         */
        protected string $resultId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeFoundVenue
    {
        return new static(
            $array['query_id'],
            $array['result_id'],
        );
    }

    public function getQueryId(): int
    {
        return $this->queryId;
    }

    public function getResultId(): string
    {
        return $this->resultId;
    }

    public function setQueryId(int $value): static
    {
        $this->queryId = $value;

        return $this;
    }

    public function setResultId(string $value): static
    {
        $this->resultId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'query_id'  => $this->queryId,
            'result_id' => $this->resultId,
        ];
    }
}
