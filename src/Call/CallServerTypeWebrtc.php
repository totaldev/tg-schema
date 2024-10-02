<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * A WebRTC server.
 */
class CallServerTypeWebrtc extends CallServerType
{
    public const TYPE_NAME = 'callServerTypeWebrtc';

    public function __construct(
        /**
         * Username to be used for authentication.
         */
        protected string $username,
        /**
         * Authentication password.
         */
        protected string $password,
        /**
         * True, if the server supports TURN.
         */
        protected bool   $supportsTurn,
        /**
         * True, if the server supports STUN.
         */
        protected bool   $supportsStun,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallServerTypeWebrtc
    {
        return new static(
            $array['username'],
            $array['password'],
            $array['supports_turn'],
            $array['supports_stun'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getSupportsStun(): bool
    {
        return $this->supportsStun;
    }

    public function getSupportsTurn(): bool
    {
        return $this->supportsTurn;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'username'      => $this->username,
            'password'      => $this->password,
            'supports_turn' => $this->supportsTurn,
            'supports_stun' => $this->supportsStun,
        ];
    }
}
