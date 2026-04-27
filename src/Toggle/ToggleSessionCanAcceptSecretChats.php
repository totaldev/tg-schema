<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a session can accept incoming secret chats.
 */
class ToggleSessionCanAcceptSecretChats extends TdFunction
{
    public const string TYPE_NAME = 'toggleSessionCanAcceptSecretChats';

    public function __construct(
        /**
         * Pass true to allow accepting secret chats by the session; pass false otherwise.
         */
        protected bool $canAcceptSecretChats,
        /**
         * Session identifier.
         */
        protected int  $sessionId,
    ) {}

    public static function fromArray(array $array): ToggleSessionCanAcceptSecretChats
    {
        return new static(
            canAcceptSecretChats: $array['can_accept_secret_chats'],
            sessionId           : $array['session_id'],
        );
    }

    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function setCanAcceptSecretChats(bool $value): static
    {
        $this->canAcceptSecretChats = $value;

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
            '@type'                   => static::TYPE_NAME,
            'can_accept_secret_chats' => $this->canAcceptSecretChats,
            'session_id'              => $this->sessionId,
        ];
    }
}
