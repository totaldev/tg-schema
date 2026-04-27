<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an existing chat corresponding to a given user.
 */
class CreatePrivateChat extends TdFunction
{
    public const string TYPE_NAME = 'createPrivateChat';

    public function __construct(
        /**
         * Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
         */
        protected bool $force,
        /**
         * User identifier.
         */
        protected int  $userId,
    ) {}

    public static function fromArray(array $array): CreatePrivateChat
    {
        return new static(
            force : $array['force'],
            userId: $array['user_id'],
        );
    }

    public function getForce(): bool
    {
        return $this->force;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setForce(bool $value): static
    {
        $this->force = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'force'   => $this->force,
            'user_id' => $this->userId,
        ];
    }
}
