<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an existing chat corresponding to a known basic group.
 */
class CreateBasicGroupChat extends TdFunction
{
    public const TYPE_NAME = 'createBasicGroupChat';

    public function __construct(
        /**
         * Basic group identifier.
         */
        protected int  $basicGroupId,
        /**
         * Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
         */
        protected bool $force
    ) {}

    public static function fromArray(array $array): CreateBasicGroupChat
    {
        return new static(
            $array['basic_group_id'],
            $array['force'],
        );
    }

    public function getBasicGroupId(): int
    {
        return $this->basicGroupId;
    }

    public function getForce(): bool
    {
        return $this->force;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'basic_group_id' => $this->basicGroupId,
            'force'          => $this->force,
        ];
    }
}
