<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about an invite link. Requires administrator privileges and can_invite_users right in the chat to get own links and owner privileges to
 * get other links
 */
class GetChatInviteLink extends TdFunction
{
    public const TYPE_NAME = 'getChatInviteLink';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Invite link to get
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(int $chatId, string $inviteLink)
    {
        $this->chatId = $chatId;
        $this->inviteLink = $inviteLink;
    }

    public static function fromArray(array $array): GetChatInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
        );
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
        ];
    }
}
