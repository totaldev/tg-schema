<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Join;

use Totaldev\TgSchema\Group\GroupCallJoinParameters;
use Totaldev\TgSchema\Input\InputGroupCall;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Joins a group call that is not bound to a chat.
 */
class JoinGroupCall extends TdFunction
{
    public const TYPE_NAME = 'joinGroupCall';

    public function __construct(
        /**
         * The group call to join.
         */
        protected InputGroupCall          $inputGroupCall,
        /**
         * Parameters to join the call.
         */
        protected GroupCallJoinParameters $joinParameters
    ) {}

    public static function fromArray(array $array): JoinGroupCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_group_call']),
            TdSchemaRegistry::fromArray($array['join_parameters']),
        );
    }

    public function getInputGroupCall(): InputGroupCall
    {
        return $this->inputGroupCall;
    }

    public function getJoinParameters(): GroupCallJoinParameters
    {
        return $this->joinParameters;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'input_group_call' => $this->inputGroupCall->typeSerialize(),
            'join_parameters'  => $this->joinParameters->typeSerialize(),
        ];
    }
}
