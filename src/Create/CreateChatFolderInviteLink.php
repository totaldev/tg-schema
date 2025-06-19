<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Creates a new invite link for a chat folder. A link can be created for a chat folder if it has only pinned and included chats.
 */
class CreateChatFolderInviteLink extends TdFunction
{
    public const TYPE_NAME = 'createChatFolderInviteLink';

    public function __construct(
        /**
         * Chat folder identifier.
         */
        protected int    $chatFolderId,
        /**
         * Name of the link; 0-32 characters.
         */
        protected string $name,
        /**
         * Identifiers of chats to be accessible by the invite link. Use getChatsForChatFolderInviteLink to get suitable chats. Basic groups will be automatically converted to supergroups before link creation.
         *
         * @var int[]
         */
        protected array  $chatIds
    ) {}

    public static function fromArray(array $array): CreateChatFolderInviteLink
    {
        return new static(
            $array['chat_folder_id'],
            $array['name'],
            $array['chat_ids'],
        );
    }

    public function getChatFolderId(): int
    {
        return $this->chatFolderId;
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_folder_id' => $this->chatFolderId,
            'name'           => $this->name,
            'chat_ids'       => $this->chatIds,
        ];
    }
}
