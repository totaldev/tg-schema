<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Saved Messages chat. Call createPrivateChat with getOption("my_id") and open the chat.
 */
class InternalLinkTypeSavedMessages extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeSavedMessages';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeSavedMessages
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
