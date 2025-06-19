<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Encrypted;

use Totaldev\TgSchema\TdObject;

/**
 * Contains encrypted Telegram Passport data credentials.
 */
class EncryptedCredentials extends TdObject
{
    public const TYPE_NAME = 'encryptedCredentials';

    public function __construct(
        /**
         * The encrypted credentials.
         */
        protected string $data,
        /**
         * The decrypted data hash.
         */
        protected string $hash,
        /**
         * Secret for data decryption, encrypted with the service's public key.
         */
        protected string $secret
    ) {}

    public static function fromArray(array $array): EncryptedCredentials
    {
        return new static(
            $array['data'],
            $array['hash'],
            $array['secret'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getHash(): string
    {
        return $this->hash;
    }

    public function getSecret(): string
    {
        return $this->secret;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'data'   => $this->data,
            'hash'   => $this->hash,
            'secret' => $this->secret,
        ];
    }
}
