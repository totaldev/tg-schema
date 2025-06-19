<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * The call is pending, waiting to be accepted by a user.
 */
class CallStatePending extends CallState
{
    public const TYPE_NAME = 'callStatePending';

    public function __construct(
        /**
         * True, if the call has already been created by the server.
         */
        protected bool $isCreated,
        /**
         * True, if the call has already been received by the other party.
         */
        protected bool $isReceived
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStatePending
    {
        return new static(
            $array['is_created'],
            $array['is_received'],
        );
    }

    public function getIsCreated(): bool
    {
        return $this->isCreated;
    }

    public function getIsReceived(): bool
    {
        return $this->isReceived;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_created'  => $this->isCreated,
            'is_received' => $this->isReceived,
        ];
    }
}
