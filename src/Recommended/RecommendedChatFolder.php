<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Recommended;

use Totaldev\TgSchema\Chat\ChatFolder;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a recommended chat folder
 */
class RecommendedChatFolder extends TdObject
{
    public const TYPE_NAME = 'recommendedChatFolder';

    /**
     * The chat folder
     *
     * @var ChatFolder
     */
    protected ChatFolder $folder;

    /**
     * Chat folder description
     *
     * @var string
     */
    protected string $description;

    public function __construct(ChatFolder $folder, string $description)
    {
        $this->folder = $folder;
        $this->description = $description;
    }

    public static function fromArray(array $array): RecommendedChatFolder
    {
        return new static(
            TdSchemaRegistry::fromArray($array['folder']),
            $array['description'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'folder' => $this->folder->typeSerialize(),
            'description' => $this->description,
        ];
    }

    public function getFolder(): ChatFolder
    {
        return $this->folder;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
