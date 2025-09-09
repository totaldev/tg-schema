<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Statistical;

/**
 * An error message to be shown to the user instead of the graph.
 */
class StatisticalGraphError extends StatisticalGraph
{
    public const TYPE_NAME = 'statisticalGraphError';

    public function __construct(
        /**
         * The error message.
         */
        protected string $errorMessage
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StatisticalGraphError
    {
        return new static(
            $array['error_message'],
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'error_message' => $this->errorMessage,
        ];
    }
}
