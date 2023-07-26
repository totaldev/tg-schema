<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Creates new chat folder. Returns information about the created chat folder. There can be up to getOption("chat_folder_count_max") chat folders, but the limit can be increased with Telegram Premium
 */
class CreateChatFolder extends TdFunction
{
    public const TYPE_NAME = 'createChatFolder';

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

    public static function fromArray(array $array): CreateChatFolder
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
