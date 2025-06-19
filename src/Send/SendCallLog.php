<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends log file for a call to Telegram servers.
 */
class SendCallLog extends TdFunction
{
    public const TYPE_NAME = 'sendCallLog';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int       $callId,
        /**
         * Call log file. Only inputFileLocal and inputFileGenerated are supported.
         */
        protected InputFile $logFile
    ) {}

    public static function fromArray(array $array): SendCallLog
    {
        return new static(
            $array['call_id'],
            TdSchemaRegistry::fromArray($array['log_file']),
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getLogFile(): InputFile
    {
        return $this->logFile;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'call_id'  => $this->callId,
            'log_file' => $this->logFile->typeSerialize(),
        ];
    }
}
