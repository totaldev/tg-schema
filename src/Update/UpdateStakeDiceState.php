<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Stake\StakeDiceState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The stake dice state has changed.
 */
class UpdateStakeDiceState extends Update
{
    public const string TYPE_NAME = 'updateStakeDiceState';

    public function __construct(
        /**
         * The new state. The state can be used only if it was received recently enough. Otherwise, a new state must be requested using getStakeDiceState.
         */
        protected StakeDiceState $state
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStakeDiceState
    {
        return new static(
            state: TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getState(): StakeDiceState
    {
        return $this->state;
    }

    public function setState(StakeDiceState $value): static
    {
        $this->state = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'state' => $this->state->jsonSerialize(),
        ];
    }
}
