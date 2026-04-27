<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a chat folder by an invite link.
 */
class AddChatFolderByInviteLink extends TdFunction
{
    public const string TYPE_NAME = 'addChatFolderByInviteLink';

    public function __construct(
        /**
         * Identifiers of the chats added to the chat folder. The chats are automatically joined if they aren't joined yet.
         *
         * @var int[]
         */
        protected array  $chatIds,
        /**
         * Invite link for the chat folder.
         */
        protected string $inviteLink,
    ) {}

    public static function fromArray(array $array): AddChatFolderByInviteLink
    {
        return new static(
            chatIds   : $array['chat_ids'],
            inviteLink: $array['invite_link'],
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

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

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
            'chat_ids'    => $this->chatIds,
            'invite_link' => $this->inviteLink,
        ];
    }
}
