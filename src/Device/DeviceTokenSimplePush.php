<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Simple Push API for Firefox OS.
 */
class DeviceTokenSimplePush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenSimplePush';

    public function __construct(
        /**
         * Absolute URL exposed by the push service where the application server can send push messages; may be empty to deregister a device.
         */
        protected string $endpoint
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenSimplePush
    {
        return new static(
            $array['endpoint'],
        );
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'endpoint' => $this->endpoint,
        ];
    }
}
