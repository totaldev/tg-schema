<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * New chat members were added.
 */
class MessageChatAddMembers extends MessageContent
{
    public const TYPE_NAME = 'messageChatAddMembers';

    public function __construct(
        /**
         * User identifiers of the new members.
         *
         * @var int[]
         */
        protected array $memberUserIds
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatAddMembers
    {
        return new static(
            $array['member_user_ids'],
        );
    }

    public function getMemberUserIds(): array
    {
        return $this->memberUserIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'member_user_ids' => $this->memberUserIds,
        ];
    }
}
