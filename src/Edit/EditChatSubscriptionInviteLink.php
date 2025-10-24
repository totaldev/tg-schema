<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Edits a subscription invite link for a channel chat. Requires can_invite_users right in the chat for own links and owner privileges for other links.
 */
class EditChatSubscriptionInviteLink extends TdFunction
{
    public const string TYPE_NAME = 'editChatSubscriptionInviteLink';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Invite link to be edited.
         */
        protected string $inviteLink,
        /**
         * Invite link name; 0-32 characters.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): EditChatSubscriptionInviteLink
    {
        return new static(
            $array['chat_id'],
            $array['invite_link'],
            $array['name'],
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

    public function getName(): string
    {
        return $this->name;
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

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_id'     => $this->chatId,
            'invite_link' => $this->inviteLink,
            'name'        => $this->name,
        ];
    }
}
