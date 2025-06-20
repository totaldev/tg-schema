<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recommended;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a recommended chat folder.
 */
class RecommendedChatFolder extends TdObject
{
    public const TYPE_NAME = 'recommendedChatFolder';

    public function __construct(
        /**
         * The chat folder.
         */
        protected ChatFolder $folder,
        /**
         * Chat folder description.
         */
        protected string     $description
    ) {}

    public static function fromArray(array $array): RecommendedChatFolder
    {
        return new static(
            TdSchemaRegistry::fromArray($array['folder']),
            $array['description'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getFolder(): ChatFolder
    {
        return $this->folder;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'folder'      => $this->folder->typeSerialize(),
            'description' => $this->description,
        ];
    }
}
