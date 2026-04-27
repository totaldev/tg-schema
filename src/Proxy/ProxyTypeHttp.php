<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

/**
 * A HTTP transparent proxy server.
 */
class ProxyTypeHttp extends ProxyType
{
    public const string TYPE_NAME = 'proxyTypeHttp';

    public function __construct(
        /**
         * Pass true if the proxy supports only HTTP requests and doesn't support transparent TCP connections via HTTP CONNECT method.
         */
        protected bool   $httpOnly,
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

    public static function fromArray(array $array): ProxyTypeHttp
    {
        return new static(
            httpOnly: $array['http_only'],
            password: $array['password'],
            username: $array['username'],
        );
    }

    public function getHttpOnly(): bool
    {
        return $this->httpOnly;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setHttpOnly(bool $value): static
    {
        $this->httpOnly = $value;

        return $this;
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
            '@type'     => static::TYPE_NAME,
            'http_only' => $this->httpOnly,
            'password'  => $this->password,
            'username'  => $this->username,
        ];
    }
}
