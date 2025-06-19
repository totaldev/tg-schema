<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an existing chat corresponding to a known supergroup or channel.
 */
class CreateSupergroupChat extends TdFunction
{
    public const TYPE_NAME = 'createSupergroupChat';

    public function __construct(
        /**
         * Supergroup or channel identifier.
         */
        protected int  $supergroupId,
        /**
         * Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
         */
        protected bool $force
    ) {}

    public static function fromArray(array $array): CreateSupergroupChat
    {
        return new static(
            $array['supergroup_id'],
            $array['force'],
        );
    }

    public function getForce(): bool
    {
        return $this->force;
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
            'force'         => $this->force,
        ];
    }
}
