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
    public const string TYPE_NAME = 'recommendedChatFolder';

    public function __construct(
        /**
         * Chat folder description.
         */
        protected string     $description,
        /**
         * The chat folder.
         */
        protected ChatFolder $folder,
    ) {}

    public static function fromArray(array $array): RecommendedChatFolder
    {
        return new static(
            description: $array['description'],
            folder     : TdSchemaRegistry::fromArray($array['folder']),
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

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
    }

    public function setFolder(ChatFolder $value): static
    {
        $this->folder = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'description' => $this->description,
            'folder'      => $this->folder->jsonSerialize(),
        ];
    }
}
