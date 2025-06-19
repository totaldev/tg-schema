<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * A secret chat with a user.
 */
class ChatTypeSecret extends ChatType
{
    public const TYPE_NAME = 'chatTypeSecret';

    public function __construct(
        /**
         * Secret chat identifier.
         */
        protected int $secretChatId,
        /**
         * User identifier of the other user in the secret chat.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatTypeSecret
    {
        return new static(
            $array['secret_chat_id'],
            $array['user_id'],
        );
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
            'user_id'        => $this->userId,
        ];
    }
}
