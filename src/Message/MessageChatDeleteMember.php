<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A chat member was deleted.
 */
class MessageChatDeleteMember extends MessageContent
{
    public const TYPE_NAME = 'messageChatDeleteMember';

    public function __construct(
        /**
         * User identifier of the deleted chat member.
         */
        protected int $userId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatDeleteMember
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
