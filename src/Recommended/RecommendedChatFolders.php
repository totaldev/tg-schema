<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Recommended;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of recommended chat folders.
 */
class RecommendedChatFolders extends TdObject
{
    public const TYPE_NAME = 'recommendedChatFolders';

    public function __construct(
        /**
         * List of recommended chat folders.
         *
         * @var RecommendedChatFolder[]
         */
        protected array $chatFolders
    ) {}

    public static function fromArray(array $array): RecommendedChatFolders
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['chat_folders']),
        );
    }

    public function getChatFolders(): array
    {
        return $this->chatFolders;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->chatFolders),
        ];
    }
}
