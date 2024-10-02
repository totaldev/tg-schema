<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Upgrades supergroup to a broadcast group; requires owner privileges in the supergroup.
 */
class ToggleSupergroupIsBroadcastGroup extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupIsBroadcastGroup';

    public function __construct(
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId
    ) {}

    public static function fromArray(array $array): ToggleSupergroupIsBroadcastGroup
    {
        return new static(
            $array['supergroup_id'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
