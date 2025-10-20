<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

/**
 * The ability to display folder names for each chat in the chat list.
 */
class BusinessFeatureChatFolderTags extends BusinessFeature
{
    public const TYPE_NAME = 'businessFeatureChatFolderTags';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): BusinessFeatureChatFolderTags
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
