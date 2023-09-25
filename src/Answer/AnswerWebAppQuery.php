<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\Input\InputInlineQueryResult;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the result of interaction with a Web App and sends corresponding message on behalf of the user to the chat from which the query originated; for bots
 * only
 */
class AnswerWebAppQuery extends TdFunction
{
    public const TYPE_NAME = 'answerWebAppQuery';

    /**
     * The result of the query
     *
     * @var InputInlineQueryResult
     */
    protected InputInlineQueryResult $result;

    /**
     * Identifier of the Web App query
     *
     * @var string
     */
    protected string $webAppQueryId;

    public function __construct(string $webAppQueryId, InputInlineQueryResult $result)
    {
        $this->webAppQueryId = $webAppQueryId;
        $this->result = $result;
    }

    public static function fromArray(array $array): AnswerWebAppQuery
    {
        return new static(
            $array['web_app_query_id'],
            TdSchemaRegistry::fromArray($array['result']),
        );
    }

    public function getResult(): InputInlineQueryResult
    {
        return $this->result;
    }

    public function getWebAppQueryId(): string
    {
        return $this->webAppQueryId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'web_app_query_id' => $this->webAppQueryId,
            'result' => $this->result->typeSerialize(),
        ];
    }
}
