<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * The message was originally sent by a known user.
 */
class MessageOriginUser extends MessageOrigin
{
    public const TYPE_NAME = 'messageOriginUser';

    public function __construct(
        /**
         * Identifier of the user that originally sent the message.
         */
        protected int $senderUserId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageOriginUser
    {
        return new static(
            $array['sender_user_id'],
        );
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'sender_user_id' => $this->senderUserId,
        ];
    }
}
