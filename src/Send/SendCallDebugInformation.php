<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends debug information for a call to Telegram servers.
 */
class SendCallDebugInformation extends TdFunction
{
    public const TYPE_NAME = 'sendCallDebugInformation';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int    $callId,
        /**
         * Debug information in application-specific format.
         */
        protected string $debugInformation,
    ) {}

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
            '@type'             => static::TYPE_NAME,
            'call_id'           => $this->callId,
            'debug_information' => $this->debugInformation,
        ];
    }
}
