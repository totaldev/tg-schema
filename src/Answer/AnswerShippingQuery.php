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
    public const TYPE_NAME = 'answerShippingQuery';

    public function __construct(
        /**
         * Identifier of the shipping query.
         */
        protected int    $shippingQueryId,
        /**
         * Available shipping options.
         *
         * @var ShippingOption[]
         */
        protected array  $shippingOptions,
        /**
         * An error message, empty on success.
         */
        protected string $errorMessage
    ) {}

    public static function fromArray(array $array): AnswerShippingQuery
    {
        return new static(
            $array['shipping_query_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['shipping_options']),
            $array['error_message'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'shipping_query_id' => $this->shippingQueryId,
            array_map(fn($x) => $x->typeSerialize(), $this->shippingOptions),
            'error_message'     => $this->errorMessage,
        ];
    }
}
