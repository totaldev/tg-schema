<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Authorization\AuthorizationState;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user authorization state has changed.
 */
class UpdateAuthorizationState extends Update
{
    public const TYPE_NAME = 'updateAuthorizationState';

    public function __construct(
        /**
         * New authorization state.
         */
        protected AuthorizationState $authorizationState
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAuthorizationState
    {
        return new static(
            TdSchemaRegistry::fromArray($array['authorization_state']),
        );
    }

    public function getAuthorizationState(): AuthorizationState
    {
        return $this->authorizationState;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'authorization_state' => $this->authorizationState->typeSerialize(),
        ];
    }
}
