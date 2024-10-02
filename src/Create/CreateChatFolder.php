<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates new chat folder. Returns information about the created chat folder. There can be up to getOption("chat_folder_count_max") chat folders, but the
 * limit can be increased with Telegram Premium.
 */
class CreateChatFolder extends TdFunction
{
    public const TYPE_NAME = 'createChatFolder';

    public function __construct(
        /**
         * The new chat folder.
         */
        protected ChatFolder $folder
    ) {}

    public static function fromArray(array $array): CreateChatFolder
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
