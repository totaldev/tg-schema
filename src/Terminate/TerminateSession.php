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
    public const TYPE_NAME = 'terminateSession';

    public function __construct(
        /**
         * Session identifier.
         */
        protected int $sessionId
    ) {}

    public static function fromArray(array $array): TerminateSession
    {
        return new static(
            $array['session_id'],
        );
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'session_id' => $this->sessionId,
        ];
    }
}
