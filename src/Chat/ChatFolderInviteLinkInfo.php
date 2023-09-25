<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an invite link to a chat folder
 */
class ChatFolderInviteLinkInfo extends TdObject
{
    public const TYPE_NAME = 'chatFolderInviteLinkInfo';

    /**
     * Basic information about the chat folder; chat folder identifier will be 0 if the user didn't have the chat folder yet
     *
     * @var ChatFolderInfo
     */
    protected ChatFolderInfo $chatFolderInfo;

    /**
     * Identifiers of the chats from the link, which aren't added to the folder yet
     *
     * @var int[]
     */
    protected array $missingChatIds;

    /**
     * Identifiers of the chats from the link, which are added to the folder already
     *
     * @var int[]
     */
    protected array $addedChatIds;

    public function __construct(ChatFolderInfo $chatFolderInfo, array $missingChatIds, array $addedChatIds)
    {
        $this->chatFolderInfo = $chatFolderInfo;
        $this->missingChatIds = $missingChatIds;
        $this->addedChatIds = $addedChatIds;
    }

    public static function fromArray(array $array): ChatFolderInviteLinkInfo
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat_folder_info']),
            $array['missing_chat_ids'],
            $array['added_chat_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_folder_info' => $this->chatFolderInfo->typeSerialize(),
            'missing_chat_ids' => $this->missingChatIds,
            'added_chat_ids' => $this->addedChatIds,
        ];
    }

    public function getChatFolderInfo(): ChatFolderInfo
    {
        return $this->chatFolderInfo;
    }

    public function getMissingChatIds(): array
    {
        return $this->missingChatIds;
    }

    public function getAddedChatIds(): array
    {
        return $this->addedChatIds;
    }
}
