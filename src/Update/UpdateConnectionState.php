<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Connection\ConnectionState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The connection state has changed. This update must be used only to show a human-readable description of the connection state.
 */
class UpdateConnectionState extends Update
{
    public const string TYPE_NAME = 'updateConnectionState';

    public function __construct(
        /**
         * The new connection state.
         */
        protected ConnectionState $state
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateConnectionState
    {
        return new static(
            state: TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getState(): ConnectionState
    {
        return $this->state;
    }

    public function setState(ConnectionState $value): static
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
