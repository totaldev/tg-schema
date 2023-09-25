<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a chat folder invite link
 */
class ChatFolderInviteLink extends TdObject
{
    public const TYPE_NAME = 'chatFolderInviteLink';

    /**
     * The chat folder invite link
     *
     * @var string
     */
    protected string $inviteLink;

    /**
     * Name of the link
     *
     * @var string
     */
    protected string $name;

    /**
     * Identifiers of chats, included in the link
     *
     * @var int[]
     */
    protected array $chatIds;

    public function __construct(string $inviteLink, string $name, array $chatIds)
    {
        $this->inviteLink = $inviteLink;
        $this->name = $name;
        $this->chatIds = $chatIds;
    }

    public static function fromArray(array $array): ChatFolderInviteLink
    {
        return new static(
            $array['invite_link'],
            $array['name'],
            $array['chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invite_link' => $this->inviteLink,
            'name' => $this->name,
            'chat_ids' => $this->chatIds,
        ];
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }
}
