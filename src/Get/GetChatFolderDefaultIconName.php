<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns default icon name for a folder. Can be called synchronously.
 */
class GetChatFolderDefaultIconName extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderDefaultIconName';

    public function __construct(
        /**
         * Chat folder.
         */
        protected ChatFolder $folder
    ) {}

    public static function fromArray(array $array): GetChatFolderDefaultIconName
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
