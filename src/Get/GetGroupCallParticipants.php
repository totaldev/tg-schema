<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Input\InputGroupCall;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about participants of a non-joined group call that is not bound to a chat.
 */
class GetGroupCallParticipants extends TdFunction
{
    public const TYPE_NAME = 'getGroupCallParticipants';

    public function __construct(
        /**
         * The group call which participants will be returned.
         */
        protected InputGroupCall $inputGroupCall,
        /**
         * The maximum number of participants to return; must be positive.
         */
        protected int            $limit
    ) {}

    public static function fromArray(array $array): GetGroupCallParticipants
    {
        return new static(
            TdSchemaRegistry::fromArray($array['input_group_call']),
            $array['limit'],
        );
    }

    public function getInputGroupCall(): InputGroupCall
    {
        return $this->inputGroupCall;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'input_group_call' => $this->inputGroupCall->typeSerialize(),
            'limit'            => $this->limit,
        ];
    }
}
