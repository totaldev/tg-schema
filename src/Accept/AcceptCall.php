<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accept;

use Totaldev\TgSchema\Call\CallProtocol;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Accepts an incoming call.
 */
class AcceptCall extends TdFunction
{
    public const TYPE_NAME = 'acceptCall';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int          $callId,
        /**
         * The call protocols supported by the application.
         */
        protected CallProtocol $protocol
    ) {}

    public static function fromArray(array $array): AcceptCall
    {
        return new static(
            $array['call_id'],
            TdSchemaRegistry::fromArray($array['protocol']),
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'call_id'  => $this->callId,
            'protocol' => $this->protocol->typeSerialize(),
        ];
    }
}
