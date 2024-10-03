<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

/**
 * A token for Tizen Push Service.
 */
class DeviceTokenTizenPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenTizenPush';

    public function __construct(
        /**
         * Push service registration identifier; may be empty to deregister a device.
         */
        protected string $regId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): DeviceTokenTizenPush
    {
        return new static(
            $array['reg_id'],
        );
    }

    public function getRegId(): string
    {
        return $this->regId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'reg_id' => $this->regId,
        ];
    }
}
