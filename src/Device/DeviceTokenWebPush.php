<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for web Push API.
 */
class DeviceTokenWebPush extends DeviceToken
{
    public const string TYPE_NAME = 'deviceTokenWebPush';

    public function __construct(
        /**
         * Base64url-encoded authentication secret.
         */
        protected string $authBase64url,
        /**
         * Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device.
         */
        protected string $endpoint,
        /**
         * Base64url-encoded P-256 elliptic curve Diffie-Hellman public key.
         */
        protected string $p256dhBase64url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenWebPush
    {
        return new static(
            authBase64url  : $array['auth_base64url'],
            endpoint       : $array['endpoint'],
            p256dhBase64url: $array['p256dh_base64url'],
        );
    }

    public function getAuthBase64url(): string
    {
        return $this->authBase64url;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function getP256dhBase64url(): string
    {
        return $this->p256dhBase64url;
    }

    public function setAuthBase64url(string $value): static
    {
        $this->authBase64url = $value;

        return $this;
    }

    public function setEndpoint(string $value): static
    {
        $this->endpoint = $value;

        return $this;
    }

    public function setP256dhBase64url(string $value): static
    {
        $this->p256dhBase64url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'auth_base64url'   => $this->authBase64url,
            'endpoint'         => $this->endpoint,
            'p256dh_base64url' => $this->p256dhBase64url,
        ];
    }
}
