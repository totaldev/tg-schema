<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Terminate;

use Totaldev\TgSchema\TdFunction;

/**
 * Terminates a session of the current user.
 */
class TerminateSession extends TdFunction
{
    public const string TYPE_NAME = 'terminateSession';

    public function __construct(
        /**
         * Session identifier.
         */
        protected int $sessionId
    ) {}

    public static function fromArray(array $array): TerminateSession
    {
        return new static(
            sessionId: $array['session_id'],
        );
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function setSessionId(int $value): static
    {
        $this->sessionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'session_id' => $this->sessionId,
        ];
    }
}
