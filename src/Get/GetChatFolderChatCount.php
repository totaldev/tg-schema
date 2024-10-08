<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns approximate number of chats in a being created chat folder. Main and archive chat lists must be fully preloaded for this function to work correctly.
 */
class GetChatFolderChatCount extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderChatCount';

    public function __construct(
        /**
         * The new chat folder.
         */
        protected ChatFolder $folder
    ) {}

    public static function fromArray(array $array): GetChatFolderChatCount
    {
        return new static(
            TdSchemaRegistry::fromArray($array['folder']),
        );
    }

    public function getFolder(): ChatFolder
    {
        return $this->folder;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'folder' => $this->folder->typeSerialize(),
        ];
    }
}
