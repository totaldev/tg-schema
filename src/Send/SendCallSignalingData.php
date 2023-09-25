<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends call signaling data
 */
class SendCallSignalingData extends TdFunction
{
    public const TYPE_NAME = 'sendCallSignalingData';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * The data
     *
     * @var string
     */
    protected string $data;

    public function __construct(int $callId, string $data)
    {
        $this->callId = $callId;
        $this->data = $data;
    }

    public static function fromArray(array $array): SendCallSignalingData
    {
        return new static(
            $array['call_id'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'data' => $this->data,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
