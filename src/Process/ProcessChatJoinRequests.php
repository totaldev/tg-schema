<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Handles all pending join requests for a given link in a chat.
 */
class ProcessChatJoinRequests extends TdFunction
{
    public const string TYPE_NAME = 'processChatJoinRequests';

    public function __construct(
        /**
         * Pass true to approve all requests; pass false to decline them.
         */
        protected bool   $approve,
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Invite link for which to process join requests. If empty, all join requests will be processed. Requires administrator privileges and can_invite_users right in the chat for own links and owner privileges for other links.
         */
        protected string $inviteLink,
    ) {}

    public static function fromArray(array $array): ProcessChatJoinRequests
    {
        return new static(
            approve   : $array['approve'],
            chatId    : $array['chat_id'],
            inviteLink: $array['invite_link'],
        );
    }

    public function getApprove(): bool
    {
        return $this->approve;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function setApprove(bool $value): static
    {
        $this->approve = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'approve'     => $this->approve,
            'chat_id'     => $this->chatId,
            'invite_link' => $this->inviteLink,
        ];
    }
}
