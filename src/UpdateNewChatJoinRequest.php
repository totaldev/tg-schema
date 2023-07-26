<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A user sent a join request to a chat; for bots only
 */
class UpdateNewChatJoinRequest extends Update
{
    public const TYPE_NAME = 'updateNewChatJoinRequest';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Join request
     *
     * @var ChatJoinRequest
     */
    protected ChatJoinRequest $request;

    /**
     * Chat identifier of the private chat with the user
     *
     * @var int
     */
    protected int $userChatId;

    /**
     * The invite link, which was used to send join request; may be null
     *
     * @var ChatInviteLink|null
     */
    protected ?ChatInviteLink $inviteLink;

    public function __construct(int $chatId, ChatJoinRequest $request, int $userChatId, ?ChatInviteLink $inviteLink)
    {
        parent::__construct();

        $this->chatId = $chatId;
        $this->request = $request;
        $this->userChatId = $userChatId;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): UpdateNewChatJoinRequest
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['request']),
            $array['user_chat_id'],
            (isset($array['invite_link']) ? TdSchemaRegistry::fromArray($array['invite_link']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'request' => $this->request->typeSerialize(),
            'user_chat_id' => $this->userChatId,
            'invite_link' => (isset($this->inviteLink) ? $this->inviteLink : null),
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRequest(): ChatJoinRequest
    {
        return $this->request;
    }

    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    public function getInviteLink(): ?ChatInviteLink
    {
        return $this->inviteLink;
    }
}
