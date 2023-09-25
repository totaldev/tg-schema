<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Handles all pending join requests for a given link in a chat
 */
class ProcessChatJoinRequests extends TdFunction
{
    public const TYPE_NAME = 'processChatJoinRequests';

    /**
     * Pass true to approve all requests; pass false to decline them
     *
     * @var bool
     */
    protected bool $approve;

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link for which to process join requests. If empty, all join requests will be processed. Requires administrator privileges and can_invite_users
     * right in the chat for own links and owner privileges for other links
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(int $chatId, string $inviteLink, bool $approve)
    {
        $this->chatId = $chatId;
        $this->inviteLink = $inviteLink;
        $this->approve = $approve;
    }

    public static function fromArray(array $array): ProcessChatJoinRequests
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
            $array['approve'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'invite_link' => $this->inviteLink,
            'approve' => $this->approve,
        ];
    }
}
