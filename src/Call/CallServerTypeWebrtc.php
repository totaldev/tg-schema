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
    public const string TYPE_NAME = 'callServerTypeWebrtc';

    public function __construct(
        /**
         * Authentication password.
         */
        protected string $password,
        /**
         * True, if the server supports STUN.
         */
        protected bool   $supportsStun,
        /**
         * True, if the server supports TURN.
         */
        protected bool   $supportsTurn,
        /**
         * Username to be used for authentication.
         */
        protected string $username,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallServerTypeWebrtc
    {
        return new static(
            password    : $array['password'],
            supportsStun: $array['supports_stun'],
            supportsTurn: $array['supports_turn'],
            username    : $array['username'],
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

    public function setPassword(string $value): static
    {
        $this->password = $value;

        return $this;
    }

    public function setSupportsStun(bool $value): static
    {
        $this->supportsStun = $value;

        return $this;
    }

    public function setSupportsTurn(bool $value): static
    {
        $this->supportsTurn = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'password'      => $this->password,
            'supports_stun' => $this->supportsStun,
            'supports_turn' => $this->supportsTurn,
            'username'      => $this->username,
        ];
    }
}
