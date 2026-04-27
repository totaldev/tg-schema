<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\TdFunction;

/**
 * Sets the result of a pre-checkout query; for bots only.
 */
class AnswerPreCheckoutQuery extends TdFunction
{
    public const string TYPE_NAME = 'answerPreCheckoutQuery';

    public function __construct(
        /**
         * An error message, empty on success.
         */
        protected string $errorMessage,
        /**
         * Identifier of the pre-checkout query.
         */
        protected int    $preCheckoutQueryId,
    ) {}

    public static function fromArray(array $array): AnswerPreCheckoutQuery
    {
        return new static(
            errorMessage      : $array['error_message'],
            preCheckoutQueryId: $array['pre_checkout_query_id'],
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getPreCheckoutQueryId(): int
    {
        return $this->preCheckoutQueryId;
    }

    public function setErrorMessage(string $value): static
    {
        $this->errorMessage = $value;

        return $this;
    }

    public function setPreCheckoutQueryId(int $value): static
    {
        $this->preCheckoutQueryId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'error_message'         => $this->errorMessage,
            'pre_checkout_query_id' => $this->preCheckoutQueryId,
        ];
    }
}
