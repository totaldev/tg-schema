<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Proxy;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A SOCKS5 proxy server
 */
class ProxyTypeSocks5 extends ProxyType
{
    public const TYPE_NAME = 'proxyTypeSocks5';

    /**
     * Password for logging in; may be empty
     *
     * @var string
     */
    protected string $password;

    /**
     * Username for logging in; may be empty
     *
     * @var string
     */
    protected string $username;

    public function __construct(string $username, string $password)
    {
        parent::__construct();

        $this->username = $username;
        $this->password = $password;
    }

    public static function fromArray(array $array): ProxyTypeSocks5
    {
        return new static(
            $array['username'],
            $array['password'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'username' => $this->username,
            'password' => $this->password,
        ];
    }
}
