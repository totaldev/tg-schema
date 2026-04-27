<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Answer;

use Totaldev\TgSchema\Shipping\ShippingOption;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the result of a shipping query; for bots only.
 */
class AnswerShippingQuery extends TdFunction
{
    public const string TYPE_NAME = 'answerShippingQuery';

    public function __construct(
        /**
         * An error message, empty on success.
         */
        protected string $errorMessage,
        /**
         * Available shipping options.
         *
         * @var ShippingOption[]
         */
        protected array  $shippingOptions,
        /**
         * Identifier of the shipping query.
         */
        protected int    $shippingQueryId,
    ) {}

    public static function fromArray(array $array): AnswerShippingQuery
    {
        return new static(
            errorMessage   : $array['error_message'],
            shippingOptions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['shipping_options']),
            shippingQueryId: $array['shipping_query_id'],
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getShippingOptions(): array
    {
        return $this->shippingOptions;
    }

    public function getShippingQueryId(): int
    {
        return $this->shippingQueryId;
    }

    public function setErrorMessage(string $value): static
    {
        $this->errorMessage = $value;

        return $this;
    }

    public function setShippingOptions(array $value): static
    {
        $this->shippingOptions = $value;

        return $this;
    }

    public function setShippingQueryId(int $value): static
    {
        $this->shippingQueryId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'error_message'     => $this->errorMessage,
            'shipping_options'  => array_map(static fn($x) => $x->jsonSerialize(), $this->shippingOptions),
            'shipping_query_id' => $this->shippingQueryId,
        ];
    }
}
