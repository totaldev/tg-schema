<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * New call signaling data arrived
 */
class UpdateNewCallSignalingData extends Update
{
    public const TYPE_NAME = 'updateNewCallSignalingData';

    /**
     * The call identifier
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
        parent::__construct();

        $this->callId = $callId;
        $this->data = $data;
    }

    public static function fromArray(array $array): UpdateNewCallSignalingData
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
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'data' => $this->data,
        ];
    }
}
