<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * An ordinary chat with a user.
 */
class ChatTypePrivate extends ChatType
{
    public const TYPE_NAME = 'chatTypePrivate';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTypePrivate
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
