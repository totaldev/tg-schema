<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\TdFunction;

/**
 * Answers a custom query; for bots only.
 */
class AnswerCustomQuery extends TdFunction
{
    public const TYPE_NAME = 'answerCustomQuery';

    public function __construct(
        /**
         * Identifier of a custom query.
         */
        protected int    $customQueryId,
        /**
         * JSON-serialized answer to the query.
         */
        protected string $data,
    ) {}

    public static function fromArray(array $array): AnswerCustomQuery
    {
        return new static(
            $array['custom_query_id'],
            $array['data'],
        );
    }

    public function getCustomQueryId(): int
    {
        return $this->customQueryId;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'custom_query_id' => $this->customQueryId,
            'data'            => $this->data,
        ];
    }
}
