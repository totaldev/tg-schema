<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds multiple new members to a chat; requires can_invite_users member right. Currently, this method is only available for supergroups and channels. This
 * method can't be used to join a chat. Members can't be added to a channel if it has more than 200 members. Returns information about members that weren't
 * added.
 */
class AddChatMembers extends TdFunction
{
    public const TYPE_NAME = 'addChatMembers';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int   $chatId,
        /**
         * Identifiers of the users to be added to the chat. The maximum number of added users is 20 for supergroups and 100 for channels.
         *
         * @var int[]
         */
        protected array $userIds
    ) {}

    public static function fromArray(array $array): AddChatMembers
    {
        return new static(
            $array['chat_id'],
            $array['user_ids'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'chat_id'  => $this->chatId,
            'user_ids' => $this->userIds,
        ];
    }
}
