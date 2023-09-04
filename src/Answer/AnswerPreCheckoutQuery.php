<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the result of a pre-checkout query; for bots only
 */
class AnswerPreCheckoutQuery extends TdFunction
{
    public const TYPE_NAME = 'answerPreCheckoutQuery';

    /**
     * Identifier of the pre-checkout query
     *
     * @var int
     */
    protected int $preCheckoutQueryId;

    /**
     * An error message, empty on success
     *
     * @var string
     */
    protected string $errorMessage;

    public function __construct(int $preCheckoutQueryId, string $errorMessage)
    {
        $this->preCheckoutQueryId = $preCheckoutQueryId;
        $this->errorMessage = $errorMessage;
    }

    public static function fromArray(array $array): AnswerPreCheckoutQuery
    {
        return new static(
            $array['pre_checkout_query_id'],
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'pre_checkout_query_id' => $this->preCheckoutQueryId,
            'error_message' => $this->errorMessage,
        ];
    }

    public function getPreCheckoutQueryId(): int
    {
        return $this->preCheckoutQueryId;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
