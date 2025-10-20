<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

/**
 * The 2-step verification was enabled recently, user needs to wait.
 */
class CanTransferOwnershipResultPasswordTooFresh extends CanTransferOwnershipResult
{
    public const TYPE_NAME = 'canTransferOwnershipResultPasswordTooFresh';

    public function __construct(
        /**
         * Time left before the session can be used to transfer ownership of a chat, in seconds.
         */
        protected int $retryAfter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CanTransferOwnershipResultPasswordTooFresh
    {
        return new static(
            $array['retry_after'],
        );
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }
}
