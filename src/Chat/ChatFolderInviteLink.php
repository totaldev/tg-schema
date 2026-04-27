<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains a chat folder invite link.
 */
class ChatFolderInviteLink extends TdObject
{
    public const string TYPE_NAME = 'chatFolderInviteLink';

    public function __construct(
        /**
         * Identifiers of chats, included in the link.
         *
         * @var int[]
         */
        protected array  $chatIds,
        /**
         * The chat folder invite link.
         */
        protected string $inviteLink,
        /**
         * Name of the link.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): ChatFolderInviteLink
    {
        return new static(
            chatIds   : $array['chat_ids'],
            inviteLink: $array['invite_link'],
            name      : $array['name'],
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

    public function getName(): string
    {
        return $this->name;
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

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'chat_ids'    => $this->chatIds,
            'invite_link' => $this->inviteLink,
            'name'        => $this->name,
        ];
    }
}
