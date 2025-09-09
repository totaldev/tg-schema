<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was sent by a known user.
 */
class MessageSenderUser extends MessageSender
{
    public const TYPE_NAME = 'messageSenderUser';

    public function __construct(
        /**
         * Identifier of the user that sent the message.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSenderUser
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
