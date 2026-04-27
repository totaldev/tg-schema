<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link that allows to select some chats.
 */
class InternalLinkTypeChatSelection extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeChatSelection';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeChatSelection
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
