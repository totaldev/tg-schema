<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the folder section of the app settings
 */
class InternalLinkTypeChatFolderSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeChatFolderSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChatFolderSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
