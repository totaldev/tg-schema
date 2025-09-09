<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads quick reply shortcuts created by the current user. The loaded data will be sent through updateQuickReplyShortcut and updateQuickReplyShortcuts.
 */
class LoadQuickReplyShortcuts extends TdFunction
{
    public const TYPE_NAME = 'loadQuickReplyShortcuts';

    public function __construct() {}

    public static function fromArray(array $array): LoadQuickReplyShortcuts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
