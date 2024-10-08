<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Log\LogStream;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets new log stream for internal logging of TDLib. Can be called synchronously.
 */
class SetLogStream extends TdFunction
{
    public const TYPE_NAME = 'setLogStream';

    public function __construct(
        /**
         * New log stream.
         */
        protected LogStream $logStream
    ) {}

    public static function fromArray(array $array): SetLogStream
    {
        return new static(
            TdSchemaRegistry::fromArray($array['log_stream']),
        );
    }

    public function getLogStream(): LogStream
    {
        return $this->logStream;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'log_stream' => $this->logStream->typeSerialize(),
        ];
    }
}
