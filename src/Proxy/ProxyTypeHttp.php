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
    public const TYPE_NAME = 'proxyTypeHttp';

    public function __construct(
        /**
         * Username for logging in; may be empty.
         */
        protected string $username,
        /**
         * Password for logging in; may be empty.
         */
        protected string $password,
        /**
         * Pass true if the proxy supports only HTTP requests and doesn't support transparent TCP connections via HTTP CONNECT method.
         */
        protected bool   $httpOnly,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ProxyTypeHttp
    {
        return new static(
            $array['username'],
            $array['password'],
            $array['http_only'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'username'  => $this->username,
            'password'  => $this->password,
            'http_only' => $this->httpOnly,
        ];
    }
}
