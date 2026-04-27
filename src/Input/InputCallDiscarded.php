<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A just ended call.
 */
class InputCallDiscarded extends InputCall
{
    public const string TYPE_NAME = 'inputCallDiscarded';

    public function __construct(
        /**
         * Identifier of the call.
         */
        protected int $callId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputCallDiscarded
    {
        return new static(
            callId: $array['call_id'],
        );
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function setCallId(int $value): static
    {
        $this->callId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'call_id' => $this->callId,
        ];
    }
}
