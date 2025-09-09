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
    public const TYPE_NAME = 'chatFolderInviteLink';

    public function __construct(
        /**
         * The chat folder invite link.
         */
        protected string $inviteLink,
        /**
         * Name of the link.
         */
        protected string $name,
        /**
         * Identifiers of chats, included in the link.
         *
         * @var int[]
         */
        protected array  $chatIds,
    ) {}

    public static function fromArray(array $array): ChatFolderInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['name'],
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

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
            'name'        => $this->name,
            'chat_ids'    => $this->chatIds,
        ];
    }
}
