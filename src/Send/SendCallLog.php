<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputFile;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends log file for a call to Telegram servers
 */
class SendCallLog extends TdFunction
{
    public const TYPE_NAME = 'sendCallLog';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * Call log file. Only inputFileLocal and inputFileGenerated are supported
     *
     * @var InputFile
     */
    protected InputFile $logFile;

    public function __construct(int $callId, InputFile $logFile)
    {
        $this->callId = $callId;
        $this->logFile = $logFile;
    }

    public static function fromArray(array $array): SendCallLog
    {
        return new static(
            $array['call_id'],
            TdSchemaRegistry::fromArray($array['log_file']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'log_file' => $this->logFile->typeSerialize(),
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getLogFile(): InputFile
    {
        return $this->logFile;
    }
}
