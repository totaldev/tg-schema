<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Group\GroupCallJoinParameters;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new group call that isn't bound to a chat.
 */
class CreateGroupCall extends TdFunction
{
    public const TYPE_NAME = 'createGroupCall';

    public function __construct(
        /**
         * Parameters to join the call; pass null to only create call link without joining the call.
         */
        protected GroupCallJoinParameters $joinParameters
    ) {}

    public static function fromArray(array $array): CreateGroupCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['join_parameters']),
        );
    }

    public function getJoinParameters(): GroupCallJoinParameters
    {
        return $this->joinParameters;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'join_parameters' => $this->joinParameters->typeSerialize(),
        ];
    }
}
