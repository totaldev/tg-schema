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
 * only.
 */
class AnswerWebAppQuery extends TdFunction
{
    public const string TYPE_NAME = 'answerWebAppQuery';

    public function __construct(
        /**
         * The result of the query.
         */
        protected InputInlineQueryResult $result,
        /**
         * Identifier of the Web App query.
         */
        protected string                 $webAppQueryId,
    ) {}

    public static function fromArray(array $array): AnswerWebAppQuery
    {
        return new static(
            result       : TdSchemaRegistry::fromArray($array['result']),
            webAppQueryId: $array['web_app_query_id'],
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

    public function setResult(InputInlineQueryResult $value): static
    {
        $this->result = $value;

        return $this;
    }

    public function setWebAppQueryId(string $value): static
    {
        $this->webAppQueryId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'result'           => $this->result->jsonSerialize(),
            'web_app_query_id' => $this->webAppQueryId,
        ];
    }
}
