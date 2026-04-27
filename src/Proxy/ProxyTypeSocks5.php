<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

/**
 * A SOCKS5 proxy server.
 */
class ProxyTypeSocks5 extends ProxyType
{
    public const string TYPE_NAME = 'proxyTypeSocks5';

    public function __construct(
        /**
         * Password for logging in; may be empty.
         */
        protected string $password,
        /**
         * Username for logging in; may be empty.
         */
        protected string $username,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ProxyTypeSocks5
    {
        return new static(
            password: $array['password'],
            username: $array['username'],
        );
    }

    public function getPassword(): string
    {
        return $this->password;
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

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'password' => $this->password,
            'username' => $this->username,
        ];
    }
}
