<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a new secret chat. Returns the newly created chat.
 */
class CreateNewSecretChat extends TdFunction
{
    public const TYPE_NAME = 'createNewSecretChat';

    public function __construct(
        /**
         * Identifier of the target user.
         */
        protected int $userId
    ) {}

    public static function fromArray(array $array): CreateNewSecretChat
    {
        return new static(
            $array['user_id'],
        );
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
        ];
    }
}
