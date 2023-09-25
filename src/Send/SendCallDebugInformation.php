<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends debug information for a call to Telegram servers
 */
class SendCallDebugInformation extends TdFunction
{
    public const TYPE_NAME = 'sendCallDebugInformation';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * Debug information in application-specific format
     *
     * @var string
     */
    protected string $debugInformation;

    public function __construct(int $callId, string $debugInformation)
    {
        $this->callId = $callId;
        $this->debugInformation = $debugInformation;
    }

    public static function fromArray(array $array): SendCallDebugInformation
    {
        return new static(
            $array['call_id'],
            $array['debug_information'],
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getDebugInformation(): string
    {
        return $this->debugInformation;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'debug_information' => $this->debugInformation,
        ];
    }
}
