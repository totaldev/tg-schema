<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a session can accept incoming calls.
 */
class ToggleSessionCanAcceptCalls extends TdFunction
{
    public const string TYPE_NAME = 'toggleSessionCanAcceptCalls';

    public function __construct(
        /**
         * Pass true to allow accepting incoming calls by the session; pass false otherwise.
         */
        protected bool $canAcceptCalls,
        /**
         * Session identifier.
         */
        protected int  $sessionId,
    ) {}

    public static function fromArray(array $array): ToggleSessionCanAcceptCalls
    {
        return new static(
            canAcceptCalls: $array['can_accept_calls'],
            sessionId     : $array['session_id'],
        );
    }

    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function setCanAcceptCalls(bool $value): static
    {
        $this->canAcceptCalls = $value;

        return $this;
    }

    public function setSessionId(int $value): static
    {
        $this->sessionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'can_accept_calls' => $this->canAcceptCalls,
            'session_id'       => $this->sessionId,
        ];
    }
}
