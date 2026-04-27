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
    public const string TYPE_NAME = 'createSupergroupChat';

    public function __construct(
        /**
         * Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
         */
        protected bool $force,
        /**
         * Supergroup or channel identifier.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): CreateSupergroupChat
    {
        return new static(
            force       : $array['force'],
            supergroupId: $array['supergroup_id'],
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

    public function setForce(bool $value): static
    {
        $this->force = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'force'         => $this->force,
            'supergroup_id' => $this->supergroupId,
        ];
    }
}
