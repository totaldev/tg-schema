<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Returns approximate number of chats in a being created chat folder. Main and archive chat lists must be fully preloaded for this function to work correctly
 */
class GetChatFolderChatCount extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderChatCount';

    /**
     * The new chat folder
     *
     * @var ChatFolder
     */
    protected ChatFolder $folder;

    public function __construct(ChatFolder $folder)
    {
        $this->folder = $folder;
    }

    public static function fromArray(array $array): GetChatFolderChatCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['folder']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'folder' => $this->folder->typeSerialize(),
        ];
    }

    public function getFolder(): ChatFolder
    {
        return $this->folder;
    }
}
