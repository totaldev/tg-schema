<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Returns default icon name for a folder. Can be called synchronously
 */
class GetChatFolderDefaultIconName extends TdFunction
{
    public const TYPE_NAME = 'getChatFolderDefaultIconName';

    /**
     * Chat folder
     *
     * @var ChatFolder
     */
    protected ChatFolder $folder;

    public function __construct(ChatFolder $folder)
    {
        $this->folder = $folder;
    }

    public static function fromArray(array $array): GetChatFolderDefaultIconName
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
