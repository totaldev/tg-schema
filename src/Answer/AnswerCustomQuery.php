<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Answers a custom query; for bots only
 */
class AnswerCustomQuery extends TdFunction
{
    public const TYPE_NAME = 'answerCustomQuery';

    /**
     * Identifier of a custom query
     *
     * @var int
     */
    protected int $customQueryId;

    /**
     * JSON-serialized answer to the query
     *
     * @var string
     */
    protected string $data;

    public function __construct(int $customQueryId, string $data)
    {
        $this->customQueryId = $customQueryId;
        $this->data = $data;
    }

    public static function fromArray(array $array): AnswerCustomQuery
    {
        return new static(
            $array['custom_query_id'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_query_id' => $this->customQueryId,
            'data' => $this->data,
        ];
    }

    public function getCustomQueryId(): int
    {
        return $this->customQueryId;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
