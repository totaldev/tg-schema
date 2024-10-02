<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Business\BusinessConnection;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A business connection has changed; for bots only.
 */
class UpdateBusinessConnection extends Update
{
    public const TYPE_NAME = 'updateBusinessConnection';

    public function __construct(
        /**
         * New data about the connection.
         */
        protected BusinessConnection $connection
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateBusinessConnection
    {
        return new static(
            TdSchemaRegistry::fromArray($array['connection']),
        );
    }

    public function getConnection(): BusinessConnection
    {
        return $this->connection;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'connection' => $this->connection->typeSerialize(),
        ];
    }
}
