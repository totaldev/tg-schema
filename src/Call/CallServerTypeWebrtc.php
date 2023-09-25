<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A WebRTC server
 */
class CallServerTypeWebrtc extends CallServerType
{
    public const TYPE_NAME = 'callServerTypeWebrtc';

    /**
     * Authentication password
     *
     * @var string
     */
    protected string $password;

    /**
     * True, if the server supports STUN
     *
     * @var bool
     */
    protected bool $supportsStun;

    /**
     * True, if the server supports TURN
     *
     * @var bool
     */
    protected bool $supportsTurn;

    /**
     * Username to be used for authentication
     *
     * @var string
     */
    protected string $username;

    public function __construct(string $username, string $password, bool $supportsTurn, bool $supportsStun)
    {
        parent::__construct();

        $this->username = $username;
        $this->password = $password;
        $this->supportsTurn = $supportsTurn;
        $this->supportsStun = $supportsStun;
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
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
            'password' => $this->password,
            'supports_turn' => $this->supportsTurn,
            'supports_stun' => $this->supportsStun,
        ];
    }
}
