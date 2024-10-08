<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Network\NetworkType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sets the current network type. Can be called before authorization. Calling this method forces all network connections to reopen, mitigating the delay in
 * switching between different networks, so it must be called whenever the network is changed, even if the network type remains the same. Network type is used
 * to check whether the library can use the network at all and also for collecting detailed network data usage statistics.
 */
class SetNetworkType extends TdFunction
{
    public const TYPE_NAME = 'setNetworkType';

    public function __construct(
        /**
         * The new network type; pass null to set network type to networkTypeOther.
         */
        protected NetworkType $type
    ) {}

    public static function fromArray(array $array): SetNetworkType
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getType(): NetworkType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
