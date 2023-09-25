<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Device;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A token for Tizen Push Service
 */
class DeviceTokenTizenPush extends DeviceToken
{
    public const TYPE_NAME = 'deviceTokenTizenPush';

    /**
     * Push service registration identifier; may be empty to deregister a device
     *
     * @var string
     */
    protected string $regId;

    public function __construct(string $regId)
    {
        parent::__construct();

        $this->regId = $regId;
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
            '@type' => static::TYPE_NAME,
            'reg_id' => $this->regId,
        ];
    }
}
