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
    public const string TYPE_NAME = 'updateNewChatJoinRequest';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int             $chatId,
        /**
         * The invite link, which was used to send join request; may be null.
         */
        protected ?ChatInviteLink $inviteLink,
        /**
         * Join request.
         */
        protected ChatJoinRequest $request,
        /**
         * Chat identifier of the private chat with the user.
         */
        protected int             $userChatId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewChatJoinRequest
    {
        return new static(
            chatId    : $array['chat_id'],
            inviteLink: (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
            request   : TdSchemaRegistry::fromArray($array['request']),
            userChatId: $array['user_chat_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInviteLink(?ChatInviteLink $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setRequest(ChatJoinRequest $value): static
    {
        $this->request = $value;

        return $this;
    }

    public function setUserChatId(int $value): static
    {
        $this->userChatId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'invite_link'  => (null !== $this->inviteLink ? $this->inviteLink->jsonSerialize() : null),
            'request'      => $this->request->jsonSerialize(),
            'user_chat_id' => $this->userChatId,
        ];
    }
}
