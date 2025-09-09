<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * New call signaling data arrived.
 */
class UpdateNewCallSignalingData extends Update
{
    public const TYPE_NAME = 'updateNewCallSignalingData';

    public function __construct(
        /**
         * The call identifier.
         */
        protected int    $callId,
        /**
         * The data.
         */
        protected string $data,
    ) {
        parent::__construct();
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
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
            'data'    => $this->data,
        ];
    }
}
