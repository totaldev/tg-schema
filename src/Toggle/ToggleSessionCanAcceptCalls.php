<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a session can accept incoming calls
 */
class ToggleSessionCanAcceptCalls extends TdFunction
{
    public const TYPE_NAME = 'toggleSessionCanAcceptCalls';

    /**
     * Session identifier
     *
     * @var int
     */
    protected int $sessionId;

    /**
     * Pass true to allow accepting incoming calls by the session; pass false otherwise
     *
     * @var bool
     */
    protected bool $canAcceptCalls;

    public function __construct(int $sessionId, bool $canAcceptCalls)
    {
        $this->sessionId = $sessionId;
        $this->canAcceptCalls = $canAcceptCalls;
    }

    public static function fromArray(array $array): ToggleSessionCanAcceptCalls
    {
        return new static(
            $array['session_id'],
            $array['can_accept_calls'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'session_id' => $this->sessionId,
            'can_accept_calls' => $this->canAcceptCalls,
        ];
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }
}
