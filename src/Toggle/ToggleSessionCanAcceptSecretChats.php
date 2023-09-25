<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether a session can accept incoming secret chats
 */
class ToggleSessionCanAcceptSecretChats extends TdFunction
{
    public const TYPE_NAME = 'toggleSessionCanAcceptSecretChats';

    /**
     * Session identifier
     *
     * @var int
     */
    protected int $sessionId;

    /**
     * Pass true to allow accepting secret chats by the session; pass false otherwise
     *
     * @var bool
     */
    protected bool $canAcceptSecretChats;

    public function __construct(int $sessionId, bool $canAcceptSecretChats)
    {
        $this->sessionId = $sessionId;
        $this->canAcceptSecretChats = $canAcceptSecretChats;
    }

    public static function fromArray(array $array): ToggleSessionCanAcceptSecretChats
    {
        return new static(
            $array['session_id'],
            $array['can_accept_secret_chats'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'session_id' => $this->sessionId,
            'can_accept_secret_chats' => $this->canAcceptSecretChats,
        ];
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }
}
