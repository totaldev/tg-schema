<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputCall;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends debug information for a call to Telegram servers.
 */
class SendCallDebugInformation extends TdFunction
{
    public const string TYPE_NAME = 'sendCallDebugInformation';

    public function __construct(
        /**
         * Call identifier.
         */
        protected InputCall $callId,
        /**
         * Debug information in application-specific format.
         */
        protected string    $debugInformation,
    ) {}

    public static function fromArray(array $array): SendCallDebugInformation
    {
        return new static(
            callId          : TdSchemaRegistry::fromArray($array['call_id']),
            debugInformation: $array['debug_information'],
        );
    }

    public function getCallId(): InputCall
    {
        return $this->callId;
    }

    public function getDebugInformation(): string
    {
        return $this->debugInformation;
    }

    public function setCallId(InputCall $value): static
    {
        $this->callId = $value;

        return $this;
    }

    public function setDebugInformation(string $value): static
    {
        $this->debugInformation = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'call_id'           => $this->callId->jsonSerialize(),
            'debug_information' => $this->debugInformation,
        ];
    }
}
