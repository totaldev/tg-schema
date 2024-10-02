<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatInviteLink;
use Totaldev\TgSchema\Chat\ChatJoinRequest;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user sent a join request to a chat; for bots only.
 */
class UpdateNewChatJoinRequest extends Update
{
    public const TYPE_NAME = 'updateNewChatJoinRequest';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * Join request.
         */
        protected ChatJoinRequest $request,
        /**
         * Chat identifier of the private chat with the user.
         */
        protected int             $userChatId,
        /**
         * The invite link, which was used to send join request; may be null.
         */
        protected ?ChatInviteLink $inviteLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewChatJoinRequest
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['request']),
            $array['user_chat_id'],
            isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }

    public function getRequest(): ChatJoinRequest
    {
        return $this->request;
    }

    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'request'      => $this->request->typeSerialize(),
            'user_chat_id' => $this->userChatId,
            'invite_link'  => (isset($this->inviteLink) ? $this->inviteLink : null),
        ];
    }
}
