<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds a chat folder by an invite link
 */
class AddChatFolderByInviteLink extends TdFunction
{
    public const TYPE_NAME = 'addChatFolderByInviteLink';

    /**
     * Identifiers of the chats added to the chat folder. The chats are automatically joined if they aren't joined yet
     *
     * @var int[]
     */
    protected array $chatIds;

    /**
     * Invite link for the chat folder
     *
     * @var string
     */
    protected string $inviteLink;

    public function __construct(string $inviteLink, array $chatIds)
    {
        $this->inviteLink = $inviteLink;
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): AddChatFolderByInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['chat_ids'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
            'chat_ids' => $this->chatIds,
        ];
    }
}
