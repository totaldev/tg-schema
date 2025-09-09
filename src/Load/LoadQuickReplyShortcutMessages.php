<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads quick reply messages that can be sent by a given quick reply shortcut. The loaded messages will be sent through updateQuickReplyShortcutMessages.
 */
class LoadQuickReplyShortcutMessages extends TdFunction
{
    public const TYPE_NAME = 'loadQuickReplyShortcutMessages';

    public function __construct(
        /**
         * Unique identifier of the quick reply shortcut.
         */
        protected int $shortcutId
    ) {}

    public static function fromArray(array $array): LoadQuickReplyShortcutMessages
    {
        return new static(
            $array['shortcut_id'],
        );
    }

    public function getShortcutId(): int
    {
        return $this->shortcutId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'shortcut_id' => $this->shortcutId,
        ];
    }
}
