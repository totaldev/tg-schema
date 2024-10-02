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
    public const TYPE_NAME = 'createPrivateChat';

    public function __construct(
        /**
         * User identifier.
         */
        protected int  $userId,
        /**
         * Pass true to create the chat without a network request. In this case all information about the chat except its type, title and photo can be incorrect.
         */
        protected bool $force,
    ) {}

    public static function fromArray(array $array): CreatePrivateChat
    {
        return new static(
            $array['user_id'],
            $array['force'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'force'   => $this->force,
        ];
    }
}
