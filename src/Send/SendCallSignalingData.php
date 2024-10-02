<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;

/**
 * Sends call signaling data.
 */
class SendCallSignalingData extends TdFunction
{
    public const TYPE_NAME = 'sendCallSignalingData';

    public function __construct(
        /**
         * Call identifier.
         */
        protected int    $callId,
        /**
         * The data.
         */
        protected string $data,
    ) {}

    public static function fromArray(array $array): SendCallSignalingData
    {
        return new static(
            $array['call_id'],
            $array['data'],
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
            'data'    => $this->data,
        ];
    }
}
