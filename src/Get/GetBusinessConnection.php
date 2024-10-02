<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a business connection by its identifier; for bots only.
 */
class GetBusinessConnection extends TdFunction
{
    public const TYPE_NAME = 'getBusinessConnection';

    public function __construct(
        /**
         * Identifier of the business connection to return.
         */
        protected string $connectionId
    ) {}

    public static function fromArray(array $array): GetBusinessConnection
    {
        return new static(
            $array['connection_id'],
        );
    }

    public function getConnectionId(): string
    {
        return $this->connectionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'connection_id' => $this->connectionId,
        ];
    }
}
